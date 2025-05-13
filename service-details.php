<?php include 'header.php'; ?>
<main class="main">

  <!-- عنوان الصفحة -->
  <section class="page-title text-center py-5" style="background: #0ea8ac; color: white;">
    <div class="container">
    <h1 class="mb-3" style="font-size: 2.5rem; font-weight: bold; margin-top: 50px;">تفاصيل الرحلات الفردية</h1>
    <p class="lead">استمتع بتجربة مميزة في وجهات فردية، حيث المتعة والاكتشاف.</p>
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
          <p id="tripDesc" class="mb-4 text-muted">رحلة فردية لاستكشاف التاريخ والتعرف على الحضارات بأسلوب تفاعلي.</p>
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
            <div class="accordion-body">
              <ul id="tripBasicDetails">
                <li><strong>التاريخ:</strong> 12 مايو 2025</li>
                <li><strong>الوقت:</strong> 9 صباحًا - 2 مساءً</li>
                <li><strong>الفئة العمرية:</strong> للأفراد</li>
                <li><strong>الرسوم:</strong> 100 ريال</li>
                <li><strong>الموقع:</strong> المتحف الوطني</li>
                <li><strong>الجهة المنظمة:</strong> فردية</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingActivities">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#activities" aria-expanded="false">
              الأنشطة الأساسية
            </button>
          </h2>
          <div id="activities" class="accordion-collapse collapse" data-bs-parent="#tripAccordion">
            <div class="accordion-body">
              <ul id="tripActivities" class="mb-2">
                <li>جولة داخل المتحف</li>
                <li>ورشة تلوين</li>
                <li>مسابقة معلومات</li>
              </ul>
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
                <li>هدايا تذكارية</li>
              </ul>
              <p class="text-muted">الرحلة تجمع بين التعلم والترفيه.</p>
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
              <ul id="tripExtras">
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
            <div class="accordion-body" id="tripBooking">
              <p>تشمل الرسوم: المواصلات، وجبة خفيفة، هدية تذكارية.</p>
              <p><strong>الرسوم الإجمالية:</strong> 100 ريال</p>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingPrep">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prep" aria-expanded="false">
              التحضيرات المطلوبة
            </button>
          </h2>
          <div id="prep" class="accordion-collapse collapse" data-bs-parent="#tripAccordion">
            <div class="accordion-body">
              <ul id="tripPrep">
                <li>ارتداء ملابس مريحة</li>
                <li>إحضار بطاقة الهوية</li>
                <li>قبعة شمسية</li>
                <li>زجاجة ماء</li>
              </ul>
            </div>
          </div>
        </div>

      </div>

      <div class="text-center mt-4">
        <!-- رابط التأكيد بعد اختيار الرحلة -->
        <a href="ch.php?trip=trip" class="btn custom-btn btn-lg" id="bookBtn">احجز الآن</a>
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
    const bookBtn = document.getElementById('bookBtn');

    const commonExtras = ['تصوير احترافي - 30 ريال', 'وجبة رئيسية - 20 ريال'];
    const commonBooking = ['<p>تشمل الرسوم: المواصلات، وجبة خفيفة، هدية تذكارية.</p>'];
    const commonPrep = ['ارتداء ملابس مريحة', 'إحضار بطاقة الهوية', 'قبعة شمسية', 'زجاجة ماء'];

    const trips = {
      museum: {
        title: 'رحلة فردية إلى المتحف',
        desc: 'استمتع برحلة فردية في المتحف الوطني لاستكشاف التاريخ والحضارات.',
        image: 'assets/img/m.jpg',
        basicDetails: ['التاريخ: 12 مايو', 'الوقت: 9 صباحًا - 2 مساءً',  'الرسوم: 100 ريال', 'الموقع: المتحف الوطني', 'الجهة المنظمة: المتحف الوطني'],
        activities: ['جولة داخل المتحف', 'ورشة تلوين', 'مسابقة معلومات'],
        benefits: ['معلومات تاريخية رائعة', 'أنشطة تعليمية مشوقة']
      },
      zoo: {
        title: 'رحلة فردية إلى حديقة الحيوان',
        desc: 'استمتع بتجربة فردية في حديقة الحيوان للتعرف على الحيوانات المختلفة.',
        image: 'assets/img/zoo.jpg',
        basicDetails: ['التاريخ: 15 مايو', 'الوقت: 10 صباحًا - 4 مساءً',  'الرسوم: 100 ريال', 'الموقع: حديقة الحيوان ', 'الجهة المنظمة: هيئة الترفية'],
        activities: ['جولة في الحديقة', 'إطعام الحيوانات'],
        benefits: ['فرصة لرؤية حيوانات مختلفة']
      },
      aquarium: {
        title: 'رحلة فردية إلى الأكواريوم',
        desc: 'اكتشف عالم البحار والمخلوقات البحرية من خلال رحلة فردية إلى الأكواريوم.',
        image: 'assets/img/a.jpg',
        basicDetails: ['التاريخ: 20 مايو', 'الوقت: 11 صباحًا - 3 مساءً',  'الرسوم: 200 ريال', 'الموقع: الأكواريوم الوطني', 'الجهة المنظمة: فقيع اكواريوم'],
        activities: ['جولة بحرية', 'مراقبة الأسماك'],
        benefits: ['استكشاف الحياة البحرية']
      },
      shallal: {
        title: 'رحلة فردية إلى مدينة ألعاب الشلال',
        desc: 'استمتع بتجربة فردية في مدينة ألعاب الشلال المليئة بالتسلية والمغامرة.',
        image: 'assets/img/s.jpg',
        basicDetails: ['التاريخ: 25 مايو', 'الوقت: 9 صباحًا - 6 مساءً', 'الرسوم: 100 ريال', 'الموقع: مدينة ألعاب الشلال', 'الجهة المنظمة: مدينة الشلال'],
        activities: ['ملاهي', 'مغامرات', 'ألعاب مائية'],
        benefits: ['ألعاب مائية ممتعة']
      },
      kidzania: {
        title: 'رحلة فردية إلى كيدزانيا',
        desc: 'رحلة ممتعة للأفراد في كيدزانيا، حيث المتعة والتعلم من خلال تجارب حية.',
        image: 'assets/img/k.jpg',
        basicDetails: ['التاريخ: 30 مايو', 'الوقت: 10 صباحًا - 4 مساءً', 'الرسوم: 200 ريال', 'الموقع: كيدزانيا', 'الجهة المنظمة: كيدزانيا'],
        activities: ['تجربة الحياة المهنية', 'ألعاب ترفيهية'],
        benefits: ['تعليم متنوع من خلال اللعب']
      },
      pottery: {
        title: 'رحلة فردية إلى ورشة الفخار',
        desc: 'استمتع بتجربة فنية في ورشة الفخار وتعلم كيفية صناعة الفخار يدويا.',
        image: 'assets/img/f.jpg',
        basicDetails: ['التاريخ: 5 يونيو', 'الوقت: 10 صباحًا - 1 مساءً', 'الرسوم: 100 ريال', 'الموقع: ورشة الفخار', 'الجهة المنظمة: هيئة الثقافة'],
        activities: ['صناعة الفخار', 'تعلم تقنيات جديدة'],
        benefits: ['تحفيز الإبداع والفن']
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
      tripBooking.innerHTML = commonBooking.join('');
      tripPrep.innerHTML = commonPrep.map(item => `<li>${item}</li>`).join('');

      bookBtn.href = `ch.php?trip=${value}`;
    });
  });
</script>

<?php include 'footer.php'; ?>













