<script src="{{ asset('admin_assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin_assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('admin_assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('admin_assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('admin_assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin_assets/plugins/chartjs/js/Chart.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/app.js') }}"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const charFields = document.querySelectorAll('.char-field');

    function updateCount(field) {
      const max = parseInt(field.getAttribute('data-max'));
      const value = field.value;
      const cleanValue = value.replace(/\s+/g, '');
      const currentLength = cleanValue.length;
      const remaining = max - currentLength;

      const counterContainer = field.parentElement.querySelector('.char-count');
      if (counterContainer) {
        counterContainer.textContent = ` (Remaining: ${remaining})`;

        if (remaining < 0) {
          counterContainer.classList.remove('text-primary');
          counterContainer.classList.add('text-danger');
        } else {
          counterContainer.classList.remove('text-danger');
          counterContainer.classList.add('text-primary');
        }
      }
    }

    charFields.forEach(field => {
      updateCount(field);
      field.addEventListener('input', function () {
        updateCount(this);
      });
    });
  });
</script>