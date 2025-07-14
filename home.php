<style>
.hover-box:hover {
    color: white;
    transition: 0.3s ease;
    transform: scale(1.07);
    cursor: pointer;
}
</style>

<section class="d-flex align-items-center" style="background-color: #fff8f6; height: 100vh; margin: 0; padding: 0;">
  <div class="container h-100 d-flex align-items-center">
    <div class="row align-items-center w-100">
      <div class="col-md-6 text-center mb-4 mb-md-0">
        <h1 style="font-family: Copperplate; font-size: 6rem; font-weight: 900; color: #524a48; line-height: 1.2; text-align: right;">
          hello, <br>
          I'm 
          <span style="color: #b0877c; -webkit-text-stroke: 1px #524a48; font-weight: 900;">Christina</span>!
        </h1>
        <p style="font-family: Copperplate; font-size: 1.5rem; color: black; font-weight: 400; margin-top: 1rem; text-align: left; margin-left: 35px;">
          Taking Bachelor of Science in Computer Science at Cavite State University-Imus Campus.
        </p> <br>
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=christinavgomba@gmail.com" class="btn btn-primary hover-box" style="font-family: Copperplate; font-size: 1.4rem; background-color: #ffc5b6; color: black; width: 90%; border: 0;"> Contact Me
        </a>
      </div>
      <div class="col-md-6 text-end">
        <img src="<?= base_url('myphoto.jpg') ?>" alt="Profile Picture" class="img-fluid w-100" style="max-width: 350px; border-radius: 40%; margin-right: 200px; position: relative; top: -30px; border: 15px solid #ffccc0;" />
      </div>
    </div>
  </div>
</section>

<section style="background-color: #ffab96; padding: 4rem 0;">
  <div class="container">
    <div class="row m-0">
      
      <!-- Comment Form -->
      <div class="col-md-6" style="margin-left: 0; padding-left: 0; padding-right: 5%;">
        <h2 style="color: white; font-size: 2rem; font-weight: 700; text-align: center;">Leave a Comment / Message!</h2>
        <p style="color: white; font-size: 1.2rem; text-align: center;"> Let's Work Together! </p>

        <!-- ✅ Form action updated -->
        <form action="<?= site_url('pages/submit_comment') ?>" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label" style="color: white;">Your Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="comment" class="form-label" style="color: white;">Your Comment</label>
            <textarea id="comment" name="comment" class="form-control" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-light">Send</button>
        </form>
      </div>

      <!-- Comment List -->
      <div class="col-md-6" style="margin-right: 0; padding-right: 0; padding-left: 5%;">
        <h2 style="color: white; font-size: 2rem; font-weight: 700;">Recent Comments</h2>
        <div style="background: white; padding: 1.5rem; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); max-height: 400px; overflow-y: auto;">

          <!-- ✅ Dynamic comment loop -->
          <?php if (!empty($comments)): ?>
            <?php foreach ($comments as $c): ?>
              <div style="margin-bottom: 1rem; border-bottom: 1px solid #eee; padding-bottom: 1rem;">
                <strong><?= htmlspecialchars($c['name']) ?></strong>
                <p><?= nl2br(htmlspecialchars($c['comment'])) ?></p>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <p style="color: #524a48;">No comments yet.</p>
          <?php endif; ?>

        </div>
      </div>

    </div>
  </div>
</section>
