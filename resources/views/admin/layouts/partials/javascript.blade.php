<script src="{{ asset('admin_assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin_assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('admin_assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('admin_assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('admin_assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin_assets/plugins/chartjs/js/Chart.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/app.js') }}"></script>

<script>
  // ── Character counter ───────────────────────────────────────────────────────
  // Finds .char-count by walking up from the field to the closest parent that
  // contains it. This handles both:
  //   • Normal fields  → <small> is a direct sibling of the <input>   (same parent)
  //   • Bullet fields  → <small> is outside the <div.input-group>     (grandparent = .bullet-row)
  function updateCharCount(field) {
    const max = parseInt(field.getAttribute('data-max'));
    const cleanValue = field.value.replace(/\s+/g, '');
    const remaining = max - cleanValue.length;

    // Walk up ancestors until we find one that contains .char-count
    let el = field.parentElement;
    let counter = null;
    while (el) {
      counter = el.querySelector('.char-count');
      if (counter) break;
      el = el.parentElement;
    }

    if (counter) {
      counter.textContent = ` (Remaining: ${remaining})`;
      if (remaining < 0) {
        counter.classList.remove('text-primary');
        counter.classList.add('text-danger');
      } else {
        counter.classList.remove('text-danger');
        counter.classList.add('text-primary');
      }
    }
  }

  // Attach listener to a single field and run initial count
  function initCharField(field) {
    updateCharCount(field);
    field.addEventListener('input', function () {
      updateCharCount(this);
    });
  }

  // Initialise all existing .char-field elements on page load
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.char-field').forEach(initCharField);
  });

  // Expose globally so dynamically added fields (e.g. bullet rows) can be
  // initialised immediately after being appended to the DOM
  window.initCharField = initCharField;

  // ── Icon Picker Logic ───────────────────────────────────────────
  let iconModal = null;
  let currentTargetInput = null;
  let iconsData = null;
  let selectedIconClass = null;

  document.addEventListener('DOMContentLoaded', function () {
    const modalEl = document.getElementById('iconPickerModal');
    if (modalEl) {
      iconModal = new bootstrap.Modal(modalEl);

      // Handle Tab Clicks
      const iconTabs = document.getElementById('iconTabs');
      if (iconTabs) {
        iconTabs.addEventListener('click', function (e) {
          if (e.target.dataset.bsToggle === 'tab') {
            document.getElementById('iconSearch').value = '';
            renderIconGrid();
          }
        });
      }

      // Handle Search
      const iconSearch = document.getElementById('iconSearch');
      if (iconSearch) {
        iconSearch.addEventListener('input', function () {
          renderIconGrid(this.value.toLowerCase());
        });
      }

      // Handle selecting an icon
      const iconTabContent = document.getElementById('iconTabContent');
      if (iconTabContent) {
        iconTabContent.addEventListener('click', function (e) {
          const box = e.target.closest('.icon-box');
          if (box) {
            document.querySelectorAll('.icon-box').forEach(b => b.classList.remove('border-primary', 'bg-primary-subtle'));
            box.classList.add('border-primary', 'bg-primary-subtle');
            selectedIconClass = box.dataset.class;
            document.getElementById('btnSelectIcon').disabled = false;
          }
        });
      }

      // Apply Icon
      const btnSelectIcon = document.getElementById('btnSelectIcon');
      if (btnSelectIcon) {
        btnSelectIcon.addEventListener('click', function () {
          if (selectedIconClass && currentTargetInput) {
            document.getElementById(currentTargetInput).value = selectedIconClass;
            iconModal.hide();
          }
        });
      }
    }
  });

  window.openIconPicker = function (targetInputId) {
    currentTargetInput = targetInputId;
    selectedIconClass = null;
    const btnSelectIcon = document.getElementById('btnSelectIcon');
    if (btnSelectIcon) btnSelectIcon.disabled = true;
    
    if (iconModal) iconModal.show();

    if (!iconsData) {
      fetch('{{ asset('admin_assets/icons.json') }}')
        .then(res => res.json())
        .then(data => {
          iconsData = data;
          buildIconTabs();
        })
        .catch(err => {
          console.error("Error loading icons:", err);
          const iconLoading = document.getElementById('iconLoading');
          if (iconLoading) iconLoading.innerHTML = '<span class="text-danger">Failed to load icons.</span>';
        });
    }
  };

  function buildIconTabs() {
    const tabsContainer = document.getElementById('iconTabs');
    const contentContainer = document.getElementById('iconTabContent');
    if (!tabsContainer || !contentContainer) return;

    tabsContainer.innerHTML = '';
    contentContainer.innerHTML = '';

    let isFirst = true;

    for (const group in iconsData) {
      // Tab Nav
      const tabId = 'tab-' + group.toLowerCase();
      tabsContainer.innerHTML += `
                        <li class="nav-item" role="presentation">
                            <a class="nav-link ${isFirst ? 'active' : ''} fs-6" data-bs-toggle="tab" href="#${tabId}" role="tab" aria-selected="${isFirst}">
                                ${group} <span class="badge bg-light text-dark ms-1">${iconsData[group].length}</span>
                            </a>
                        </li>`;

      // Tab Content Pane
      contentContainer.innerHTML += `
                        <div class="tab-pane fade ${isFirst ? 'show active' : ''}" id="${tabId}" role="tabpanel">
                            <div class="row g-2 icon-grid-container px-2"></div>
                        </div>`;

      isFirst = false;
    }

    renderIconGrid();
  }

  function renderIconGrid(searchTerm = '') {
    // Determine active tab
    const activeTabLink = document.querySelector('#iconTabs .nav-link.active');
    if (!activeTabLink) return;

    const groupName = activeTabLink.textContent.trim().split(' ')[0];
    const activePaneId = activeTabLink.getAttribute('href');
    const gridContainer = document.querySelector(`${activePaneId} .icon-grid-container`);
    if (!gridContainer) return;

    let html = '';
    let count = 0;

    const icons = iconsData[groupName] || [];

    for (let i = 0; i < icons.length; i++) {
      const iconClass = icons[i];
      if (searchTerm === '' || iconClass.toLowerCase().includes(searchTerm)) {
        html += `
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 mb-2">
                                <div class="card border radius-10 text-center icon-box cursor-pointer h-100 transition" data-class="${iconClass}">
                                    <div class="card-body p-3">
                                        <i class="${iconClass} fs-2 mb-2 text-dark"></i>
                                        <div class="text-truncate small text-muted font-monospace" title="${iconClass}">${iconClass}</div>
                                    </div>
                                </div>
                            </div>`;
        count++;
      }
      if (count > 500 && searchTerm === '') {
        // Limit rendered icons if no search to prevent UI freezing (font-awesome is large)
        break;
      }
    }

    if (html === '') {
      html = `<div class="col-12 text-center py-4 text-muted">No icons match '${searchTerm}' in ${groupName}</div>`;
    }

    gridContainer.innerHTML = html;
  }

  // ── Video Player Logic ───────────────────────────────────────────
  let videoModal = null;
  document.addEventListener('DOMContentLoaded', function () {
    const vModalEl = document.getElementById('videoPlayerModal');
    if (vModalEl) {
      videoModal = new bootstrap.Modal(vModalEl);
      
      // Stop video when modal is hidden
      vModalEl.addEventListener('hidden.bs.modal', function() {
        document.getElementById('videoPlayerIframe').src = '';
      });
    }
  });

  window.playAdminVideo = function (videoId) {
    if (!videoId) return;
    const iframe = document.getElementById('videoPlayerIframe');
    if (iframe) {
      iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
      if (videoModal) videoModal.show();
    }
  };
</script>