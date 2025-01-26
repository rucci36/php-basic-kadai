<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // クラスを定義
        class Food {
            // プロパティを定義
            private $name;
            private $price;

            // メソッドを定義
            public function set_price(int $price) {
                $this->price = $price;
            }
            public function show_price() {
                echo $this->price . '<br>';
            }

            // コンストラクタを定義
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }

        // インスタンス化
        $food = new Food('potato', 250);

        // heightの値を出力
            print_r($food);
            echo "</pre><br>";

        // クラスを定義
        class Animal {
            // プロパティを定義
            private $name;
            private $height;
            private $weight;

            // メソッドを定義
            public function set_height(int $height) {
            $this->height = $height;
            }
            public function show_height() {
                echo $this->height . '<br>';
            }

            // コンストラクタを定義
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
    }

    // インスタンス化
    $animal = new Animal('dog', 60, 5000);

    // heightの値を出力
    print_r($animal);
    echo "</pre><br>";

            // メソッドにアクセス
            $food->show_price();
            $animal->show_height();
        ?>
        </p>
</body>

</html>