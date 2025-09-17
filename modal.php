<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <title>Show Bootstrap Modal on Page Load Using jQuery</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    /> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
  </head>
  <body>
    <a href="#myModal" class="btn btn-lg btn-light" data-bs-toggle="modal" style="margin-top:30px"
      >Comium history</a
    >
    <div class="m-4">
      <div id="myModal" class="modal fade" tabindex="999">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Confirmation</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
              ></button>
            </div>
            <div class="modal-body">
              <p>
                Do you want to save changes to this document before closing?
              </p>
              <p class="text-secondary">
                <small>If you don't save, your changes will be lost.</small>
              </p>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal"
              >
                Cancel
              </button>
              <button type="button" class="btn btn-primary">
                Save changes
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
