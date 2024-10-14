
<main>
  <section class="introduction">
    <h1 class="title">BESOK MINGGU FORM</h1>
    <form action="index.php?page=detail" method="post" id="myForm">
      <div class="main-container">
        <h2>Form Input</h2>
        <div class="input-container centerized-item">
          <label for="username-input">Username</label>
          <input
            type="text"
            class="input-text"
            id="username-input"
            name="username"
            placeholder="user20323"
          />
        </div>
        <div class="input-container centerized-item">
          <label for="email-input">Email-Address</label>
          <input
            type="email"
            id="email-input"
            name="email"
            class="input-text"
            placeholder="user20323@gmail.com"
          />
        </div>
        <div class="input-container centerized-item">
          <label for="issue-input">Issue</label>
          <select name="issue" id="issue-input">
            <option value="Query">Query</option>
            <option value="Feedback">Feedback</option>
            <option value="Complaint">Complaint</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="input-container">
          <label for="summernote">Comments</label>
          <textarea name="comments" id="summernote"></textarea>
        </div>

        <script>
          $("#summernote").summernote({
            placeholder: "Enter Your Comments",
            height: "296px",
          });
        </script>
      </div>
      <div class="submit-button">
        <button
          type="submit"
        >
          Save
        </button>
      </div>
    </form>
  </section>
</main>
