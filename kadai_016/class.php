<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP16章課題</title>
</head>
<body>
  <p>
    <?php
    // クラスを定義する
    class Food {
      // プロパティを定義する
      private $name;
      private $price;

      // メソッドを定義する
      public function show_price() {
        echo $this->price . '<br>';
      }

      // コンストラクタを定義する
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }

    // クラスを定義する
    class Animal {
      // プロパティを定義する
      private $name;
      private $height;
      private $weight;

      // メソッドを定義する
      public function show_height() {
        echo $this->height . '<br>';
      }

      // コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }

    // インスタンス化する
    $apple = new Food('りんご', 150);
    $cat = new Animal('猫', 80, 3000);

    // インスタンスを出力する
    print_r($apple);
    echo '<br>';
    print_r($cat);
    echo '<br>';

    // メソッドを実行する
    $apple->show_price();
    $cat->show_height();
    ?>
  </p>
</body>
</html>