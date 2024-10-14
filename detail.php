
<?php
function generateOptions($issue) {
    $options = ['Query', 'Feedback', 'Complaint', 'Other']; // Array of all possible options
    foreach ($options as $option) {
        // Check if the current option matches the issue value
        $selected = ($option === $issue) ? 'selected' : '';
        echo "<option value=\"$option\" $selected>$option</option>";
    }
}
?>

<script>
  function OnEditEnter(isEditEnter) {
    var editButton = document.getElementById("edit");
    var confirmButton = document.getElementById("non-edit");
    var viewmode = document.getElementsByClassName("view-mode");
    var editmode = document.getElementsByClassName("edit-mode");

    console.log("Test");

    if (editButton == null) {
      console.error("Error: Edit Button Are null");
      return;
    }
    if (confirmButton == null) {
      console.error("Error: Edit Button Are null");
      return;
    }

    if (isEditEnter) {
      // If the state before entering is on edit
      if (editButton.classList.contains("hidden")) {
        // Show When Default
        Array.from(viewmode).forEach((element) => {
          element.classList.remove("hidden");
        });
        editButton.classList.remove("hidden");
        Array.from(editmode).forEach((element) => {
          element.classList.add("hidden");
        });
      }
      confirmButton.classList.add("hidden");
    } else {
      // Show when edited
      if (confirmButton.classList.contains("hidden")) {
        confirmButton.classList.remove("hidden");
        Array.from(editmode).forEach((element) => {
          element.classList.remove("hidden");
        });
      }
      Array.from(viewmode).forEach((element) => {
        element.classList.add("hidden");
      });

      editButton.classList.add("hidden");
    }
  }

  function AcceptEdit() {
    OnEditEnter(true);
  }

  function CancelEdit() {
    OnEditEnter(true);

      // Restore original values for all inputs
  var originalUsername = "<?php echo $name; ?>";
  var originalEmail = "<?php echo $email; ?>";
  var originalIssue = "<?php echo $issue; ?>";
  var originalComment = "<?php echo trim(strip_tags($comment)); ?>";

  // Set the values back to the original values
  document.querySelector('input[name="username"]').value = originalUsername;
  document.querySelector('input[name="email"]').value = originalEmail;
  document.querySelector('select[name="issue"]').value = originalIssue;
  document.querySelector('textarea[name="comments"]').value = originalComment;
  }
</script>
<main>
  <section class="introduction">
    <h1 class="title">BESOK MINGGU DETAILS</h1>
    <div class="main-container">
      <form action="">
        <div class="detail-intro">
          <h2>Detail Form</h2>
          <button
            type="button"
            class="edit-button"
            id="edit"
            onclick="OnEditEnter(false)"
          >
            <img class="image-filler" src="images/Edit.svg" alt="Edit Button" />
          </button>
          <div class="onedit-intro hidden" id="non-edit">
            <button class="confirm" onclick="AcceptEdit()" type="button">
              <h1>Ok</h1>
            </button>
            <button class="close-button" onclick="CancelEdit()" type="button">
              <img
                class="image-filler"
                src="images/Close.svg"
                alt="Close Button"
              />
            </button>
          </div>
        </div>

        <div class="detail-container centerized-item">
          <h3 class="label">Username :</h3>

          <h3 class="content">
            <span class="view-mode">
              <?php
                    $name = isset($_POST['username']) ? $_POST['username'] : '';
                    echo $name;
                ?>
            </span>
            <input
              type="text"
              class="edit-mode hidden"
              name="username"
              value="<?php echo $name?>"
            />
          </h3>
        </div>
        <div class="detail-container centerized-item">
          <h3 class="label">Email-Address :</h3>
          <h3 class="content">
            <span class="view-mode">
              <?php
                    $email = isset($_POST['email']) ? $_POST['email'] : '';
                    echo $email;
                ?>
            </span>
            <input type="text"
            class="edit-mode hidden"
            name="email"
            value="<?php echo $email?>"/>
          </h3>
        </div>
        <div class="detail-container centerized-item">
          <h3 class="label">Issue :</h3>
          <h3 class="content">
            <span class="view-mode">
                <?php
                        $issue = isset($_POST['issue']) ? $_POST['issue'] : 'Query';
                        echo $issue;
                    ?>
                </span>
                <select name="issue" id="issue-input" class="edit-mode hidden">
                    <?php
                        generateOptions($issue);

                    ?>
                </select>
                
          </h3>
        </div>
        <div class="detail-container-comment">
          <h3 class="label">Comments :</h3>
          <div class="view-mode comment-displayer">
            <h3 class="comments-text">
              <?php
                    $comment = isset($_POST['comments']) ? $_POST['comments'] : '';
                    echo $comment;
                ?>
            </h3>
          </div>
          <textarea name="comments" id="summernote" class="edit-mode hidden comment-displayer">
            <?php echo trim(strip_tags($comment)) ?>
          </textarea>
        </div>
      </form>
    </div>
  </section>
</main>