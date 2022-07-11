<?php
include('db_connection.php');

function request($param,$connect) {
  $query = "SELECT DISTINCT($param) FROM sofas WHERE id > 0 ORDER BY id DESC";
            $statement = $connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
}
?>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Sofas</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <!--ФИЛЬТРЫ-->
      <div class="col-md-3">
        <div class="list-group">
          <h3>Цена</h3>
          <p>От:</p>
          <input type="number" id="minimum_price" value="1000" />
          <p>До:</p>
          <input type="number" id="maximum_price" value="35000" />
        </div>

        <div class="list-group">
          <h3>Цвет</h3>
          <div style=" overflow-y: auto; overflow-x: hidden;">
            <?php
            $result = request('color',$connect);
            foreach ($result as $row) {
            ?>
              <div class="list-group-item checkbox">
                <label>
                  <input type="checkbox" class="common_selector color" value="<?php echo $row['color']; ?>">
                  <?php echo $row['color']; ?>
                </label>
              </div>
            <?php } ?>
          </div>
        </div>
        <!--list-group-->

        <div class="list-group">
          <h3>Материал</h3>
          <div style=" overflow-y: auto; overflow-x: hidden;">
            <?php
            $result = request('material',$connect);
            foreach ($result as $row) {
            ?>
              <div class="list-group-item checkbox">
                <label>
                  <input type="checkbox" class="common_selector material" value="<?php echo $row['material']; ?>">
                  <?php echo $row['material']; ?>
                </label>
              </div>
            <?php } ?>
          </div>
        </div>
        <!--list-group-->

        <div class="list-group">
          <h3>Страна - производитель</h3>
          <div style=" overflow-y: auto; overflow-x: hidden;">
            <?php
            $result = request('country',$connect);
            foreach ($result as $row) {
            ?>
              <div class="list-group-item checkbox">
                <label>
                  <input type="checkbox" class="common_selector country" value="<?php echo $row['country']; ?>">
                  <?php echo $row['country']; ?>
                </label>
              </div>
            <?php } ?>
          </div>
        </div>
        <!--list-group-->
      </div>
      <!--col-md-3-->

      <!--ТОВАРЫ-->
      <div class="col-md-9">
        <div class="row filter_data"></div>
        <!--row-->
      </div>
      <!--col-md-9-->
    </div>
  </div>
  <!--container-->
  <script src="script.js"></script>
</body>
</html>