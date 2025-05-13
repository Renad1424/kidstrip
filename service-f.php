<?php include 'header.php'; ?>
<main class="main">

  <!-- عنوان الصفحة -->
  <section class="page-title text-center py-5" style="background: var(--accent-color); color: white;">
    <div class="container">
    <h1 class="mb-3" style="font-size: 2.5rem; font-weight: bold; margin-top: 50px;">تفاصيل الرحلات العائلية</h1>
    <p class="lead">استمتع بأوقات رائعة مع عائلتك في وجهات ممتعة لجميع الأعمار.</p>
    </div>
  </section>

  <!-- اختيار الرحلة -->
  <section class="trip-selector-section py-5 bg-light">
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

  <!-- تفاصيل الرحلة -->
  <section class="trip-details-section py-5">
    <div class="container">
      <div class="row align-items-center mb-4" id="tripDetails">
        <div class="col-md-6 mb-4 mb-md-0">
        <img src="assets/img/m.jpg" id="tripImage" class="img-fluid rounded shadow trip-image" alt="صورة الرحلة">
        </div>
        <div class="col-md-6">
          <h2 id="tripTitle" class="mb-3" style="color: #065b5e;">رحلة إلى المتحف</h2>
          <p id="tripDesc" class="mb-4 text-muted">رحلة عائلية ممتعة لاستكشاف التاريخ والتعرف على الحضارات بأسلوب تفاعلي.</p>
        </div>
      </div>

      <!-- Accordion للمواصفات -->
      <div class="accordion" id="tripAccordion">

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingDetails">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#basicDetails" aria-expanded="true">
              التفاصيل الأساسية
            </button>
          </h2>
          <div id="basicDetails" class="accordion-collapse collapse show" data-bs-parent="#tripAccordion">
            <div class="accordion-body" id="tripBasic">
              <p><strong>التاريخ:</strong> 12 مايو 2025</p>
              <p><strong>الوقت:</strong> 9 صباحًا - 2 مساءً</p>
              <p><strong>الفئة العمرية:</strong> لجميع الأعمار</p>
              <p><strong>الرسوم:</strong> 100 ريال</p>
              <p><strong>الموقع:</strong> المتحف الوطني</p>
              <p><strong>الجهة المنظمة:</strong> العائلة</p>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingActivities">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#activities" aria-expanded="false">
              الأنشطة الأساسية + برسوم إضافية
            </button>
          </h2>
          <div id="activities" class="accordion-collapse collapse" data-bs-parent="#tripAccordion">
            <div class="accordion-body">
              <ul id="tripActivities" class="mb-2">
                <li>جولة داخل المتحف</li>
                <li>ورشة تلوين</li>
                <li>مسابقة معلومات</li>
              </ul>
              <p class="text-muted"><strong>أنشطة برسوم إضافية:</strong> تجربة VR بـ20 ريال، التقاط صورة تذكارية بـ25 ريال</p>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingBenefits">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#benefits" aria-expanded="false">
              مزايا الرحلة
            </button>
          </h2>
          <div id="benefits" class="accordion-collapse collapse" data-bs-parent="#tripAccordion">
            <div class="accordion-body">
              <ul id="tripBenefits">
                <li>مواصلات مكيفة وآمنة</li>
                <li>وجبات صحية</li>
                <li>هدايا تذكارية لجميع الأعمار</li>
              </ul>
              <p class="text-muted">الرحلة تجمع بين التعلم والترفيه لجميع أفراد العائلة.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingExtras">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#extras" aria-expanded="false">
              تقديمات برسوم إضافية
            </button>
          </h2>
          <div id="extras" class="accordion-collapse collapse" data-bs-parent="#tripAccordion">
            <div class="accordion-body">
              <ul>
                <li>تصوير احترافي - 30 ريال</li>
                <li>وجبة رئيسية - 20 ريال</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFee">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fees" aria-expanded="false">
              رسوم الحجز
            </button>
          </h2>
          <div id="fees" class="accordion-collapse collapse" data-bs-parent="#tripAccordion">
            <div class="accordion-body">
              <p>تشمل الرسوم: المواصلات، وجبة خفيفة، هدية تذكارية لجميع أفراد العائلة.</p>
              <p><strong>الرسوم الإجمالية:</strong> 100 ريال</p>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingPrep">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prep" aria-expanded="false">
              التحضيرات المطلوبة من الأسرة
            </button>
          </h2>
          <div id="prep" class="accordion-collapse collapse" data-bs-parent="#tripAccordion">
            <div class="accordion-body" id="tripPrep">
              <ul>
                <li>ارتداء ملابس مريحة وساترة</li>
                <li>إحضار بطاقة الهوية</li>
                <li>قبعة شمسية</li>
                <li>زجاجة ماء</li>
              </ul>
            </div>
          </div>
        </div>

      </div>

      <div class="text-center mt-4">
      <a href="ch_f.php" class="btn custom-btn btn-lg">احجز الآن</a>
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

<!-- JavaScript الخاص بتغيير البيانات حسب الرحلة -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const tripSelector = document.getElementById('tripSelector');
    const tripTitle = document.getElementById('tripTitle');
    const tripDesc = document.getElementById('tripDesc');
    const tripImage = document.getElementById('tripImage');

    const tripBasicDetails = document.getElementById('tripBasicDetails');
    const tripActivities = document.getElementById('tripActivities');
    const tripBenefits = document.getElementById('tripBenefits');
    const tripExtras = document.getElementById('tripExtras');
    const tripBooking = document.getElementById('tripBooking');
    const tripPrep = document.getElementById('tripPrep');

    const commonExtras = ['تصوير احترافي', 'وجبة رئيسية'];
    const commonBooking = ['يشمل المواصلات، وجبة خفيفة، هدية تذكارية'];
    const commonPrep = ['ارتداء ملابس مريحة وساترة', 'إحضار بطاقة الهوية', 'قبعة شمسية وزجاجة ماء'];

    const trips = {
      museum: {
        title: 'رحلة عائلية إلى المتحف',
        desc: 'استمتعوا برحلة عائلية إلى المتحف الوطني، حيث يمكنكم اكتشاف التاريخ والآثار في أجواء تفاعلية. جولة مميزة لجميع أفراد العائلة مع ورش عمل ممتعة للأطفال.',
        image: 'assets/img/m.jpg',
        basicDetails: ['التاريخ: 12 مايو', 'الوقت: 9 صباحًا - 2 مساءً', 'الفئة: لجميع الأعمار', 'الرسوم: 100 ريال', 'الموقع: المتحف الوطني', 'الجهة المنظمة:المتحف الوطني'],
        activities: ['جولة داخل المتحف', 'ورشة تلوين للأطفال', 'مسابقة معلومات تاريخية'],
        benefits: ['معلومات تاريخية قيّمة', 'أنشطة تعليمية محفزة للأطفال', 'جو ترفيهي مناسب لجميع الأعمار']
      },
      zoo: {
        title: 'رحلة عائلية إلى حديقة الحيوان',
        desc: 'استمتعوا بيوم عائلي في حديقة الحيوان  حيث يمكنكم مشاهدة الحيوانات المتنوعة في بيئة طبيعية. نشاط ممتع للأطفال والكبار مع فرصة لإطعام الحيوانات.',
        image: 'assets/img/zoo.jpg',
        basicDetails: ['التاريخ: 15 مايو', 'الوقت: 10 صباحًا - 4 مساءً', 'الفئة: لجميع الأعمار', 'الرسوم: 100 ريال', 'الموقع: حديقة الحيوان ', 'الجهة المنظمة: هيئة الترفية'],
        activities: ['جولة داخل الحديقة', 'إطعام الحيوانات', 'عرض الحيوانات البرية'],
        benefits: ['تعرفوا على أنواع متعددة من الحيوانات', 'أنشطة تفاعلية مع الحيوانات', 'جو مفعم بالمرح لكافة الأعمار']
      },
      aquarium: {
        title: 'رحلة عائلية إلى الأكواريوم',
        desc: 'استمتعوا برحلة مميزة إلى الأكواريوم، حيث يمكنكم استكشاف الحياة البحرية الغنية. جولة تحت الماء لجميع أفراد العائلة لمشاهدة الأسماك والشعاب المرجانية.',
        image: 'assets/img/a.jpg',
        basicDetails: ['التاريخ: 18 مايو', 'الوقت: 11 صباحًا - 3 مساءً', 'الفئة: لجميع الأعمار', 'الرسوم: 150 ريال', 'الموقع: الأكواريوم الوطني', 'الجهة المنظمة: فقيه اكواريوم'],
        activities: ['جولة بحرية داخل الأكواريوم', 'عرض الحياة البحرية', 'غرف تفاعلية للأطفال'],
        benefits: ['تعلموا عن الحياة البحرية', 'أنشطة تفاعلية مع الأسماك', 'استكشاف الشعاب المرجانية في جو ممتع']
      },
      shallal: {
        title: 'رحلة عائلية إلى مدينة ألعاب الشلال',
        desc: 'انضموا إلينا في رحلة مليئة بالمرح والمغامرة في مدينة ألعاب الشلال. الأنشطة المائية والهوائية تنتظركم مع ألعاب لجميع الأعمار.',
        image: 'assets/img/s.jpg',
        basicDetails: ['التاريخ: 20 مايو', 'الوقت: 12 مساءً - 6 مساءً', 'الفئة: لجميع الأعمار', 'الرسوم: 100 ريال', 'الموقع: مدينة ألعاب الشلال', 'الجهة المنظمة: مدينة الشلال'],
        activities: ['ألعاب مائية', 'قطار مغامرات', 'مناطق ترفيهية للأطفال'],
        benefits: ['مغامرات مثيرة لجميع الأعمار', 'ألعاب مائية ممتعة', 'أنشطة تناسب كافة أفراد العائلة']
      },
      kidzania: {
        title: 'رحلة عائلية إلى كيدزانيا',
        desc: 'رحلة تعليمية وترفيهية للأطفال في كيدزانيا، حيث يمكن للأطفال تجربة العديد من المهن في بيئة تفاعلية وممتعة. نشاط مثالي للأطفال والعائلات.',
        image: 'assets/img/k.jpg',
        basicDetails: ['التاريخ: 22 مايو', 'الوقت: 10 صباحًا - 5 مساءً', 'الفئة: للأطفال من 4 إلى 14 عامًا', 'الرسوم: 150 ريال', 'الموقع: كيدزانيا ', 'الجهة المنظمة: كيدزانيا'],
        activities: ['تجربة مهن مختلفة', 'أنشطة تفاعلية', 'جولات موجهة'],
        benefits: ['تعلم المهن المختلفة للأطفال', 'أنشطة تعليمية مبتكرة', 'تجربة ترفيهية وتعليمية ممتعة']
      },
      pottery: {
        title: 'رحلة عائلية إلى ورشة الفخار',
        desc: 'انضموا إلى ورشة الفخار العائلية حيث يمكنكم تعلم فنون تشكيل الطين وصناعة الأواني. فرصة للتمتع بالإبداع مع العائلة.',
        image: 'assets/img/f.jpg',
        basicDetails: ['التاريخ: 25 مايو', 'الوقت: 9 صباحًا - 1 ظهرًا', 'الفئة: لجميع الأعمار', 'الرسوم: 100 ريال', 'الموقع: ورشة الفخار', 'الجهة المنظمة: هيئة الثقافة'],
        activities: ['تعلم تشكيل الفخار', 'صناعة الأواني اليدوية', 'ورشة تعليمية للأطفال والكبار'],
        benefits: ['تعلم الحرف اليدوية', 'أنشطة جماعية تفاعلية', 'صناعة هدايا شخصية من الفخار']
      }
    };

    tripSelector.addEventListener('change', function () {
      const value = this.value;
      const data = trips[value];
      if (!data) return;

      tripTitle.textContent = data.title;
      tripDesc.textContent = data.desc;
      tripImage.src = data.image;

      tripBasicDetails.innerHTML = data.basicDetails.map(item => `<li>${item}</li>`).join('');
      tripActivities.innerHTML = data.activities.map(item => `<li>${item}</li>`).join('');
      tripBenefits.innerHTML = data.benefits.map(item => `<li>${item}</li>`).join('');
      tripExtras.innerHTML = commonExtras.map(item => `<li>${item}</li>`).join('');
      tripBooking.innerHTML = commonBooking.map(item => `<li>${item}</li>`).join('');
      tripPrep.innerHTML = commonPrep.map(item => `<li>${item}</li>`).join('');
    });
  });
</script>


<?php include 'footer.php'; ?>
