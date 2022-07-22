Tuấn Lê
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <div class="card" style="border: 1px black solid">text</div>
    <div class="card" style="border: 1px black solid">text</div>
    <div class="circle">Click</div>

    <script>
      document
        .getElementsByClassName("circle")
        .item(0)
        .addEventListener("click", () => {
          const dom = document.getElementsByClassName("card");
          const len = dom.length;
          for (let i = 0; i < len; ++i) {
            dom.item(i).style.color = "red";
          }
        });
    </script>
  </body>
</html>