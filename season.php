<?php include 'header.php'; ?>
<main class="main">

  <!-- عنوان الصفحة -->
  <section class="page-title text-center py-5" style="background: var(--accent-color); color: white;">
    <div class="container">
    <h1 class="mb-3" style="font-size: 2.5rem; font-weight: bold; margin-top: 50px;">تفاصيل البرامج الموسمية</h1>
    <p class="lead">برامج تجمع بين المتعة والتعلم خلال المواسم والإجازات</p>
    </div>
  </section>

  <!-- اختيار الرحلة -->
  <section class="trip-selector-section py-5 bg-light">
  <div class="container text-center">
      <label for="programSelector" class="form-label fs-5 fw-bold">اختر البرنامج:</label>
      <select id="programSelector" class="form-select w-50 mx-auto shadow-sm">
        <option value="summer">المخيم الصيفي</option>
        <option value="eid">فعاليات العيد</option>
        <option value="winter">البرنامج الشتوي</option>
        <option value="reading">برنامج القراءة</option>
      </select>
    </div>
  </section>
  <!-- تفاصيل البرنامج -->
  <section class="trip-details-section py-5">
    <div class="container">
      <div class="row align-items-center mb-4" id="tripDetails">
        <div class="col-md-6 mb-4 mb-md-0">
          <img src="assets/img/summer.jpg" id="tripImage" class="img-fluid rounded shadow trip-image" alt="صورة البرنامج">
        </div>
        <div class="col-md-6">
          <h2 id="tripTitle" class="mb-3" style="color: #065b5e;">المخيم الصيفي</h2>
          <p id="tripDesc" class="mb-4 text-muted">برنامج ترفيهي وتعليمي يقام خلال الإجازة الصيفية، يجمع بين الأنشطة الحركية والإبداعية في بيئة ممتعة وآمنة.</p>
        </div>
      </div>

      <!-- Accordion للمواصفات -->
      <div class="accordion" id="tripAccordion">

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#basicDetails" aria-expanded="true">
              التفاصيل الأساسية
            </button>
          </h2>
          <div id="basicDetails" class="accordion-collapse collapse show" data-bs-parent="#tripAccordion">
            <div class="accordion-body" id="tripBasicDetails">
              <!-- يتم تعبئته ديناميكيًا -->
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#activities" aria-expanded="false">
              الأنشطة الأساسية
            </button>
          </h2>
          <div id="activities" class="accordion-collapse collapse" data-bs-parent="#tripAccordion">
            <div class="accordion-body">
              <ul id="tripActivities" class="mb-2"></ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#benefits" aria-expanded="false">
              مزايا البرنامج
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
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fees" aria-expanded="false">
              رسوم الاشتراك
            </button>
          </h2>
          <div id="fees" class="accordion-collapse collapse" data-bs-parent="#tripAccordion">
            <div class="accordion-body" id="tripBooking">
              <!-- يتم تعبئته ديناميكيًا -->
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prep" aria-expanded="false">
              التحضيرات المطلوبة من الطفل
            </button>
          </h2>
          <div id="prep" class="accordion-collapse collapse" data-bs-parent="#tripAccordion">
            <div class="accordion-body" id="tripPrep">
              <!-- يتم تعبئته ديناميكيًا -->
            </div>
          </div>
        </div>

      </div>

      <div class="text-center mt-4">
        <a href="ch_v.php" class="btn custom-btn btn-lg">سجّل الآن</a>
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
    const programSelector = document.getElementById('programSelector');
    const tripTitle = document.getElementById('tripTitle');
    const tripDesc = document.getElementById('tripDesc');
    const tripImage = document.getElementById('tripImage');

    const tripBasicDetails = document.getElementById('tripBasicDetails');
    const tripActivities = document.getElementById('tripActivities');
    const tripBenefits = document.getElementById('tripBenefits');
    const tripBooking = document.getElementById('tripBooking');
    const tripPrep = document.getElementById('tripPrep');

    const commonExtras = ['تصوير احترافي - 20 ريال', 'وجبة رئيسية - 15 ريال'];
    const commonBooking = ['يشمل المواد، وجبة خفيفة، شهادة مشاركة.', '<strong>الرسوم الإجمالية:</strong> 100 ريال'];
    const commonPrep = ['ارتداء زي مريح', 'إحضار أدوات شخصية حسب الحاجة', ' زجاجة ماء خاصة'];

    const programs = {
      summer: {
        title: 'المخيم الصيفي',
        desc: 'برنامج ترفيهي وتعليمي يقام خلال الإجازة الصيفية، يجمع بين الأنشطة الحركية والإبداعية في بيئة ممتعة وآمنة.',
        image: 'assets/img/cam.jpg',
        basicDetails: ['الفترة: 1 يوليو - 2 يوليو', 'الفئة: من 8 إلى 14 سنة', 'الوقت: 9 صباحًا - 1 ظهرًا', 'الموقع: المركز الثقافي','الفئة: من 8 إلى 14 سنة'],
        activities: ['ألعاب رياضية', 'ورش فنية', 'قصص تفاعلية', 'أنشطة مائية'],
        benefits: ['تعزيز المهارات الاجتماعية', 'أنشطة حركية آمنة', 'أجواء ممتعة']
      },
      eid: {
        title: 'فعاليات العيد',
        desc: 'احتفاليات ترفيهية للأطفال خلال أيام العيد تشمل فقرات مسرحية وهدايا ومسابقات.',
        image: 'assets/img/Eid.jpg',
        basicDetails: ['التاريخ: ثاني أيام العيد', 'الوقت: 5 مساءً - 9 مساءً', 'الموقع: حديقة الأمير ماجد', 'الفئة: لجميع الأعمار'],
        activities: ['مسرحيات للأطفال', 'ألعاب بهلوانية', 'ركن رسم على الوجه', 'هدايا'],
        benefits: ['أجواء احتفالية', 'أنشطة آمنة وممتعة', 'تفاعل اجتماعي']
      },
      winter: {
        title: 'البرنامج الشتوي',
        desc: 'أنشطة تعليمية وترفيهية تُقام خلال عطلة الشتاء لتنمية المهارات ومشاركة ممتعة.',
        image: 'assets/img/cand.jpg',
        basicDetails: ['الفترة: 10 يناير - 11 يناير', 'الوقت: 10 صباحًا - 2 مساءً', 'الموقع: المركز الشتوي التربوي', 'الفئة: من 8 إلى 14 سنة'],
        activities: ['ورش إبداعية', 'تجارب علمية مبسطة', 'قراءة جماعية', 'صناعة شموع'],
        benefits: ['تحفيز الإبداع', 'تعلم ممتع', 'تنمية روح الفريق']
      },
      reading: {
        title: 'برنامج القراءة',
        desc: 'مبادرة لتعزيز حب القراءة لدى الأطفال من خلال ورش وقصص تفاعلية ومسابقة قراءة.',
        image: 'assets/img/read.jpg',
        basicDetails: ['الفترة: 7 يناير', 'الوقت: 4 مساءً - 7 مساءً', 'الموقع: مكتبة الحي', 'الفئة: من 8 إلى 14 سنة'],
        activities: ['قراءة قصص مشوّقة', 'مناقشات تفاعلية', 'مسابقة قارئ الشهر'],
        benefits: ['تنمية اللغة العربية', 'تعزيز الخيال', 'تشجيع عادة القراءة']
      }
    };

    programSelector.addEventListener('change', function () {
      const selected = this.value;
      const data = programs[selected];
      if (!data) return;

      tripTitle.textContent = data.title;
      tripDesc.textContent = data.desc;
      tripImage.src = data.image;

      tripBasicDetails.innerHTML = data.basicDetails.map(item => `<p>${item}</p>`).join('');
      tripActivities.innerHTML = data.activities.map(item => `<li>${item}</li>`).join('');
      tripBenefits.innerHTML = data.benefits.map(item => `<li>${item}</li>`).join('');
      tripBooking.innerHTML = commonBooking.join('<br>');
      tripPrep.innerHTML = commonPrep.map(item => `<li>${item}</li>`).join('');
      document.querySelector('.custom-btn').href = `ch_v.php?program=${selected}`;

    });

    // Trigger change event on page load to display the initial program
    programSelector.dispatchEvent(new Event('change'));
  });
</script>

<?php include 'footer.php'; ?>



