<?php
namespace App\CentralLogics;

use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use PhpOffice\PhpSpreadsheet\Cell\Cell;

class Helpers
{
    public static function max_without_spaces($max)
    {
        return function ($attribute, $value, $fail) use ($max) {
            $cleanValue = preg_replace('/\s+/u', '', $value);
            if (mb_strlen($cleanValue) > $max) {
                $fail("The $attribute may not be greater than $max characters (excluding spaces).");
            }
        };
    }

    public static function upload(
        string $dir,
        $image = null,
        ?string $oldImage = null,
        ?int $width = null,
        ?int $height = null
    ): ?string {

        if (!$image || !$image->isValid()) {
            return null;
        }

        $storagePath = public_path("storage/{$dir}");

        if (!is_dir($storagePath)) {
            mkdir($storagePath, 0755, true);
        }

        if (!empty($oldImage)) {
            $oldPath = $storagePath . '/' . basename($oldImage);
            if (file_exists($oldPath)) {
                @unlink($oldPath);
            }

            // Cleanup potential previous formats
            $webpPath = preg_replace('/\.[^.]+$/', '.webp', $oldPath);
            if (file_exists($webpPath))
                @unlink($webpPath);
            $pngPath = preg_replace('/\.[^.]+$/', '.png', $oldPath);
            if (file_exists($pngPath))
                @unlink($pngPath);
            $icoPath = preg_replace('/\.[^.]+$/', '.ico', $oldPath);
            if (file_exists($icoPath))
                @unlink($icoPath);
        }

        $extension = strtolower($image->getClientOriginalExtension());

        // Handle ICO files separately to preserve format
        if ($extension === 'ico') {
            $imageName = Carbon::now()->format('YmdHis') . '-' . uniqid() . '.ico';
            $image->move($storagePath, $imageName);
            return $imageName;
        }

        $format = ($extension === 'png') ? 'png' : 'webp';
        $imageName = Carbon::now()->format('YmdHis') . '-' . uniqid() . '.' . $format;
        $fullPath = $storagePath . '/' . $imageName;

        $manager = new ImageManager(new Driver());
        $img = $manager->read($image->getPathname());

        if ($width || $height) {
            if ($width && $height) {
                if ($img->width() !== $width || $img->height() !== $height) {
                    $img->scale($width, $height);
                }
            } elseif ($width && !$height) {
                if ($img->width() !== $width) {
                    $img->resize($width, null);
                }
            } elseif ($height && !$width) {
                if ($img->height() !== $height) {
                    $img->resize(null, $height);
                }
            }
        }

        if ($format === 'png') {
            $img->toPng()->save($fullPath);
        } else {
            $img->toWebp(75)->save($fullPath);
        }

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
