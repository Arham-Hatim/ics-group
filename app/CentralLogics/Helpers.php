<?php
namespace App\CentralLogics;

use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use PhpOffice\PhpSpreadsheet\Cell\Cell;

class Helpers
{

    public static function upload($dir, $image = null, $oldImage = null, ?int $width = null, ?int $height = null, ?string $singleColor = null, bool $makeTransparent = false)
    {
        if (!$image || !$image->isValid()) {
            return null;
        }

        // Delete old image if exists
        if (!empty($oldImage)) {
            $fileName = basename($oldImage);
            $oldPath = public_path("storage/{$dir}/{$fileName}");
            if (file_exists($oldPath)) {
                @unlink($oldPath);
            }

            // Also remove old WebP version if exists
            $webpPath = preg_replace('/\.[^.]+$/', '.webp', $oldPath);
            if (file_exists($webpPath)) {
                @unlink($webpPath);
            }
        }

        // Determine format
        $format = $makeTransparent ? 'png' : 'webp';

        // Generate new file name
        $imageName = Carbon::now()->format('YmdHis') . '-' . uniqid() . '.' . $format;
        $path = public_path("storage/{$dir}");
        if (!is_dir($path)) {
            mkdir($path, 0755, true);
        }

        $manager = new ImageManager(new Driver());
        $img = $manager->read($image->getPathname());

        // Resize if width & height provided
        if ($width && $height) {
            if ($img->width() != $width || $img->height() != $height) {
                $img->cover($width, $height);
            }
        }

        // Convert multi-color image to single color
        if ($singleColor) {
            $img->greyscale();
            $img->contrast(60);
            $overlay = $manager->create($img->width(), $img->height())->fill($singleColor);
            $img->place($overlay, 'center', 0, 0, 100);
        }

        // Encode image (all formats quality 70)
        switch ($format) {
            case 'png':
                $encoded = $img->toPng(70);
                break;
            case 'webp':
                $encoded = $img->toWebp(70);
                break;
            default:
                $encoded = $img->toWebp(70);
                break;
        }

        // Save file
        file_put_contents("{$path}/{$imageName}", $encoded->toString());

        return $imageName;
    }

    public static function extractYouTubeId($input)
    {
        // Return empty array if invalid
        if (empty($input) || !is_string($input)) {
            return [];
        }

        $input = trim($input, "[] \t\n\r\0\x0B");

        $parts = preg_split('/\s*,\s*/', $input);

        $urls = collect($parts)->flatMap(function ($part) {
            preg_match_all('/<iframe[^>]+src="([^"]+)"/i', $part, $matches);
            return !empty($matches[1]) ? $matches[1] : [$part];
        });

        // Extract YouTube video IDs from URLs
        $ids = $urls->map(function ($url) {
            if (preg_match('/youtube\.com\/embed\/([^\?&"]+)/i', $url, $m)) {
                return $m[1];
            }
            if (preg_match('/v=([^\?&"]+)/i', $url, $m)) {
                return $m[1];
            }
            if (preg_match('/youtu\.be\/([^\?&"]+)/i', $url, $m)) {
                return $m[1];
            }
            return null;
        })->filter()->unique()->values()->all();

        return $ids;
    }
}
