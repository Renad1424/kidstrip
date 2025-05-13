<section id="stats" class="stats-section py-5 text-center">
  <div class="container">
    <div class="row">
      <!-- عدد الأطفال المشاركين -->
      <div class="col-md-3 mb-4">
        <h2 class="stat-number" data-target="3919">0</h2>
        <p class="stat-label">عدد الأطفال المشاركين</p>
      </div>

      <!-- عدد الحجوزات المدرسية -->
      <div class="col-md-3 mb-4">
        <h2 class="stat-number" data-target="1831">0</h2>
        <p class="stat-label">عدد الحجوزات المدرسية</p>
      </div>

      <!-- رضا أولياء الأمور -->
      <div class="col-md-3 mb-4">
        <h2 class="stat-number" data-target="230">0</h2>
        <p class="stat-label">  عدد الحجوزات الفردية</p>
      </div>

      <!-- الرحلات المنفذة -->
      <div class="col-md-3 mb-4">
        <h2 class="stat-number" data-target="2061">0</h2>
        <p class="stat-label">الرحلات المنفذة</p>
      </div>
    </div>
  </div>
</section>


<script>
  function animateStats() {
    const stats = document.querySelectorAll('.stat-number');

    stats.forEach(stat => {
      const target = +stat.getAttribute('data-target');
      let count = 0;
      const speed = 50;
      const step = Math.ceil(target / speed);

      function update() {
        count += step;
        if (count > target) count = target;
        stat.textContent = count.toLocaleString();
        if (count < target) {
          requestAnimationFrame(update);
        }
      }

      const observer = new IntersectionObserver(entries => {
        if (entries[0].isIntersecting) {
          update();
          observer.disconnect();
        }
      }, { threshold: 0.6 });

      observer.observe(stat);
    });
  }

  window.addEventListener('DOMContentLoaded', animateStats);
</script>
