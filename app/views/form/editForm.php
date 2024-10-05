<div class="row">
  <div class="sub-title">
    <a href="index.html" title="Go to Home Page">
      <h2>Back Home</h2>
    </a>
    <a href="#comment" class="smoth-scroll"><i class="icon-bubbles"></i></a>
  </div>

  <div class="col-md-12 content-page">
    <div class="col-md-12 blog-post">
      <!-- Post Headline Start -->
      <div class="post-title">
        <h1>Edition d'un form</h1>
      </div>
      <!-- Post Headline End -->

      <!-- Form Start -->
      <form action="/posts/add/insert" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="title"><?php echo post['title'] ?></label>
          <input type="text" name="title" id="title" class="form-control" placeholder="Enter your title here" />
        </div>
        <div class="form-group">
          <label for="text"><?php echo post['text'] ?></label>
          <textarea id="text" name="text" class="form-control" rows="5" placeholder="Enter your text here"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1"> Image</label>
          <input type="file" class="form-control-file btn btn-primary" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
          <label for="text"><?php echo post['quote'] ?></label>
          <textarea id="quote" name="quote" class="form-control" rows="5"
            placeholder="Enter your quote here"></textarea>
        </div>
        <div class="form-group">
          <label for="text"><?php echo post['category_id'] ?></label>
          <select id="category" name="category_id" class="form-control">
            <option disabled selected>
              Select your category
            </option>
            <?php foreach ($categories as $category) : ?>
            <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div>
          <input class="btn btn-primary" type="submit" value="submit" />
          <input class="btn btn-secondary" type="reset" value="reset" />
        </div>
      </form>
      <!-- Form End -->
    </div>
  </div>
</div>