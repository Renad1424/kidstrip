<?php include 'header.php'; ?>
<main class="main">
  <!-- هيدر الصفحة بلون أزرق غامق -->
  <section class="page-title text-center py-5" style="background-color: , #1dc8cd !important; color: white;">
        <div class="container">
      <h1 class="mb-3" style="font-size: 2.5rem; font-weight: bold; margin-top: 50px;">
        تفاصيل الرحلات المدرسية
      </h1>
      <p class="lead">
        رحلات تعليمية متميزة للطلاب لاكتشاف أماكن جديدة والتعلم بطريقة ممتعة.
      </p>
    </div>
  </section>

  <!-- قسم اختيار الوجهة -->
  <section class="trip-selector-section py-5">
    <div class="container text-center">
      <label for="tripSelector" class="form-label fs-5 fw-bold">اختر وجهتك :</label>
      <select id="tripSelector" class="form-select w-50 mx-auto shadow-sm">
        <option value="museum">المتحف</option>
        <option value="zoo">حديقة الحيوان</option>
        <option value="aquarium">الأكواريوم</option>
        <option value="shallal">مدينة ألعاب الشلال</option>
        <option value="kidzania">كيدزانيا</option>
        <option value="pottery">ورشة الفخار</option>
      </select>
    </div>
  </section>
</main>

  <section class="trip-details-section py-5">
    <div class="container">
      <div class="row align-items-center mb-4" id="tripDetails">
        <div class="col-md-6 mb-4 mb-md-0">
        <img src="assets/img/m.jpg" id="tripImage" class="img-fluid rounded shadow trip-image" alt="صورة الرحلة">
        </div>
        <div class="col-md-6">
          <h2 id="tripTitle" class="mb-3" style="color: #065b5e;">رحلة مدرسية إلى المتحف</h2>
          <p id="tripDesc" class="mb-4 text-muted">رحلة مدرسية لاستكشاف تاريخ الحضارات والآثار بطريقة تفاعلية.</p>
        </div>
      </div>

      <div class="accordion" id="tripAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingDetails">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#basicDetails" aria-expanded="true">
              التفاصيل الأساسية
            </button>
          </h2>
          <div id="basicDetails" class="accordion-collapse collapse show" data-bs-parent="#tripAccordion">
            <div class="accordion-body" id="tripBasic"></div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#activities">
              الأنشطة الأساسية
            </button>
          </h2>
          <div id="activities" class="accordion-collapse collapse" data-bs-parent="#tripAccordion">
            <div class="accordion-body">
              <ul id="tripActivities"></ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#benefits">
              مزايا الرحلة
            </button>
          </h2>
          <div id="benefits" class="accordion-collapse collapse" data-bs-parent="#tripAccordion">
            <div class="accordion-body">
              <ul id="tripBenefits"></ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fees">
              رسوم الحجز
            </button>
          </h2>
          <div id="fees" class="accordion-collapse collapse" data-bs-parent="#tripAccordion">
            <div class="accordion-body">
              <p>تشمل الرسوم: جولة تعليمية، أنشطة تفاعلية، وخدمات مرافقة.</p>
              <p><strong>الرسوم الإجمالية:</strong> <span id="tripFee">50 ريال</span></p>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prep">
              التحضيرات المطلوبة
            </button>
          </h2>
          <div id="prep" class="accordion-collapse collapse" data-bs-parent="#tripAccordion">
            <div class="accordion-body">
              <ul id="tripPrep"></ul>
            </div>
          </div>
        </div>

      </div>

      <div class="text-center mt-4">
        <a href="ch_s.php" class="btn custom-btn btn-lg">احجز الآن</a>
      </div>
    </div>
  </section>
  <style>
  .trip-image {
    width: 700px;        /* عرض ثابت */
    height: 400px;       /* ارتفاع ثابت */
    object-fit: cover;   /* يملأ الصورة بدون تشويه */
    border-radius: 1rem; /* حواف ناعمة */
  }
</style>

</main>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const tripSelector = document.getElementById('tripSelector');
    const tripTitle = document.getElementById('tripTitle');
    const tripDesc = document.getElementById('tripDesc');
    const tripImage = document.getElementById('tripImage');
    const tripBasic = document.getElementById('tripBasic');
    const tripActivities = document.getElementById('tripActivities');
    const tripBenefits = document.getElementById('tripBenefits');
    const tripPrep = document.getElementById('tripPrep');
    const tripFee = document.getElementById('tripFee');

    const commonPrep = ['ارتداء زي المدرسة الرسمي', 'إحضار بطاقة الهوية', 'حقيبة ظهر صغيرة', 'زجاجة ماء'];

    const trips = {
      museum: {
        title: 'رحلة مدرسية إلى المتحف',
        desc: 'رحلة تعليمية لاكتشاف تاريخ الحضارات بطريقة تفاعلية.',
        image: 'assets/img/m.jpg',
        basic: ['التاريخ: 12 مايو 2025', 'الوقت: 9 صباحًا - 2 مساءً', 'الفئة العمرية: لجميع طلاب المدارس', 'الموقع: المتحف الوطني', 'الجهة المنظمة: المتحف الوطني'],
        activities: ['جولة داخل المتحف', 'ورشة تفاعلية عن التاريخ', 'مسابقة تعليمية'],
        benefits: ['تعلم تفاعلي', 'أنشطة محفزة', 'تجربة ثقافية'],
        fee: '50 ريال'
      },
      zoo: {
        title: 'رحلة مدرسية إلى حديقة الحيوان',
        desc: 'رحلة للتعرف على الحيوانات وبيئاتها الطبيعية.',
        image: 'assets/img/zoo.jpg',
        basic: ['التاريخ: 15 مايو 2025', 'الوقت: 10 صباحًا - 3 مساءً', 'الفئة العمرية: لجميع طلاب المدارس', 'الموقع: حديقة الحيوان', 'الجهة المنظمة:  هيئة الترفية'],
        activities: ['جولة تعليمية', 'إطعام الحيوانات', 'ورشة تفاعلية عن البيئة'],
        benefits: ['تنمية المعرفة البيئية', 'تفاعل مباشر مع الحيوانات'],
        fee: '40 ريال'
      },
      aquarium: {
        title: 'رحلة مدرسية إلى الأكواريوم',
        desc: 'استكشاف الحياة البحرية من خلال تجربة تعليمية فريدة.',
        image: 'assets/img/a.jpg',
        basic: ['التاريخ: 18 مايو 2025', 'الوقت: 9 صباحًا - 1 مساءً', 'الفئة العمرية: لجميع طلاب المدارس', 'الموقع: أكواريوم جدة', 'الجهة المنظمة: فقيه اكواريوم'],
        activities: ['عرض الكائنات البحرية', 'تجربة تغذية الأسماك', 'ورشة تفاعلية عن البيئة البحرية'],
        benefits: ['زيادة الوعي البيئي', 'تجربة ترفيهية وتعليمية'],
        fee: '55 ريال'
      },
      shallal: {
        title: 'رحلة مدرسية إلى الشلال',
        desc: 'تجربة ترفيهية وتعليمية في أجواء ممتعة.',
        image: 'assets/img/s.jpg',
        basic: ['التاريخ: 20 مايو 2025', 'الوقت: 11 صباحًا - 5 مساءً', 'الفئة العمرية: لجميع طلاب المدارس', 'الموقع: مدينة الشلال الترفيهية', 'الجهة المنظمة:  مدينة الشلال'],
        activities: ['جولات بالألعاب', 'عرض توعوي عن السلامة', 'ورشة مصغرة'],
        benefits: ['تنمية مهارات التواصل', 'ترفيه وتعليم'],
        fee: '60 ريال'
      },
      kidzania: {
        title: 'رحلة مدرسية إلى كيدزانيا',
        desc: 'تجربة تعليمية فريدة من نوعها تحاكي عالم الكبار.',
        image: 'assets/img/k.jpg',
        basic: ['التاريخ: 22 مايو 2025', 'الوقت: 10 صباحًا - 3 مساءً', 'الفئة العمرية: لجميع طلاب المدارس', 'الموقع: كيدزانيا جدة', 'الجهة المنظمة:  كيدزنيا'],
        activities: ['ممارسة مهن مختلفة', 'ورش تعليمية', 'تجربة تفاعلية'],
        benefits: ['تنمية المسؤولية', 'تعزيز الإبداع'],
        fee: '70 ريال'
      },
      pottery: {
        title: 'رحلة مدرسية إلى ورشة الفخار',
        desc: 'تعلم مهارات تشكيل الفخار بطريقة ممتعة.',
        image: 'assets/img/f.jpg',
        basic: ['التاريخ: 25 مايو 2025', 'الوقت: 9 صباحًا - 12 مساءً', 'الفئة العمرية: لجميع طلاب المدارس', 'الموقع: مركز الفنون التقليدية', 'الجهة المنظمة:  هيئة الثقافة'],
        activities: ['تشكيل الفخار', 'تلوين الأعمال اليدوية', 'شرح تاريخ الحرفة'],
        benefits: ['تعزيز المهارات اليدوية', 'اكتشاف الفنون التقليدية'],
        fee: '45 ريال'
      }
    };

    function updateTripContent(trip) {
      tripTitle.textContent = trip.title;
      tripDesc.textContent = trip.desc;
      tripImage.src = trip.image;
      tripBasic.innerHTML = trip.basic.map(item => `<p><strong>${item.split(':')[0]}:</strong> ${item.split(':')[1]}</p>`).join('');
      tripActivities.innerHTML = trip.activities.map(item => `<li>${item}</li>`).join('');
      tripBenefits.innerHTML = trip.benefits.map(item => `<li>${item}</li>`).join('');
      tripPrep.innerHTML = commonPrep.map(item => `<li>${item}</li>`).join('');
      tripFee.textContent = trip.fee;
    }

    updateTripContent(trips.museum);
    tripSelector.addEventListener('change', e => updateTripContent(trips[e.target.value]));
  });
</script>

<?php include 'footer.php'; ?>


