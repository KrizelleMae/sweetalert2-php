<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sweetalert2 sample</title>

    <script src="./sweetalert2/jquery-3.6.0.min.js"></script>
    <script src="./sweetalert2/sweetalert2.all.min.js"></script>

    <style>
      #btn {
        padding: 10px 20px;
        font-size: medium;
        background-color: violet;
        border: none;
        cursor: pointer;
        border-radius: 2px;
      }
    </style>
  </head>
  <body>
    <div class="center"><button id="btn">Click me!</button></div>
  </body>

  <script>
    $("#btn").on("click", function () {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire("Deleted!", "Your file has been deleted.", "success");
        }
      });
    });
  </script>
</html>
