<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <style>
      body, html{
          width: 100%;
          height: 100%;
          margin: 0;
        }

        .container{
          width: 100%;
          height: 100%;
        }

        .leftpane{
            width: 32%;
            height: 100%;
            float: left;
        }

        .leftpane h1{
            margin-top: 65%;
        }

        .middlepane{
            width: 36%;
            height: 100%;
            float: left;
        }

        .middlepane .form{
          margin-left: 33%;
          margin-top: 38%;
        }

        .rightpane{
          width: 32%;
          height: 100%;
          position: relative;
          float: right;
        }

        .rightpane .form{
          margin-left: 33%;
          margin-top: 42%;
        }

    </style>

  </head>
        <body>
          <div class="container">
            <div class="leftpane">
              <center><h1>VAN JOAKHIM B. LAUDE</h1></center>
            </div>
            <div class="middlepane">
              <form class="form" action="index.php" method="post">
                <h3>Calculator</h3>
                <p>Input first number:</p>
                <input type="number" name="given1" value="">
                <p>Input second number:</p>
                <input type="number" name="given2" value="">
                <br>
                <br>
                    <input type="submit" name="add" value="+">
                    <input type="submit" name="subtract" value="-">
                    <input type="submit" name="multiply" value="*">
                    <input type="submit" name="divide" value="/">
                <br>
                <br>
                  <?php
                    if(isset($_POST['add']))
                    {
                          if(empty($_POST['given1']) && empty($_POST['given2']))
                          {
                            echo "NO GIVEN!";
                          }
                          elseif (empty($_POST['given1']))
                          {
                            echo "NO 1ST GIVEN!";
                          }
                          elseif (empty($_POST['given2']))
                          {
                            echo "NO 2ND GIVEN!";
                          }
                          elseif (!empty($_POST['given1']) && !empty($_POST['given2']))
                          {
                            $given1 = $_POST['given1'];
                            $given2 = $_POST['given2'];
                            $add = $given1 + $given2;
                            echo $given1 . " + " . $given2 . " = " . $add;
                          }

                    }
                    elseif(isset($_POST['subtract']))
                    {
                          if(empty($_POST['given1']) && empty($_POST['given2']))
                          {
                            echo "NO GIVEN!";
                          }
                          elseif(empty($_POST['given1']))
                          {
                            echo "NO 1ST GIVEN!";
                          }
                          elseif(empty($_POST['given2']))
                          {
                            echo "NO 2ND GIVEN!";
                          }
                          elseif(!empty($_POST['given1']) && !empty($_POST['given2']))
                          {
                            $given1 = $_POST['given1'];
                            $given2 = $_POST['given2'];
                            $difference = $given1 - $given2;
                            echo $given1 . " - " . $given2 . " = " . $difference;
                          }
                    }
                    elseif(isset($_POST['multiply']))
                    {
                          if(empty($_POST['given1']) && empty($_POST['given2']))
                          {
                            echo "NO GIVEN!";
                          }
                          elseif(empty($_POST['given1']))
                          {
                            echo "NO 1ST GIVEN!";
                          }
                          elseif(empty($_POST['given2']))
                          {
                            echo "NO 2ND GIVEN!";
                          }
                          elseif(!empty($_POST['given1']) && !empty($_POST['given2']))
                          {
                            $given1 = $_POST['given1'];
                            $given2 = $_POST['given2'];
                            $product = $given1 * $given2;
                            echo $given1 . " * " . $given2 . " = " . $product;
                          }
                    }
                    elseif(isset($_POST['divide']))
                    {
                          if(empty($_POST['given1']) && empty($_POST['given2']))
                          {
                            echo "NO GIVEN!";
                          }
                          elseif(empty($_POST['given1']))
                          {
                            echo "NO 1ST GIVEN!";
                          }
                          elseif(empty($_POST['given2']))
                          {
                            echo "NO 2ND GIVEN!";
                          }
                          elseif(!empty($_POST['given1']) && !empty($_POST['given2']))
                          {
                            $given1 = $_POST['given1'];
                            $given2 = $_POST['given2'];
                            $quotient = $given1 / $given2;
                            echo $given1 . " / " . $given2 . " = " . $quotient;
                          }

                    }
                  ?>
                </p>
              </form>
            </div>
            <div class="rightpane">
                <form class="form" action="index.php" method="post">
                    <h3>GCD</h3>
                    <p>Input first number:</p>
                      <input type="number" name="given1" value="">
                    <p>Input second number:</p>
                      <input type="number" name="given2" value="">
                    <br>
                    <br>
                      <input type="submit" name="submit" value="Submit">
                    <br>
                    <br>
                    <?php
                    if(isset($_POST['submit']))
                    {
                      if(empty($_POST['given1']) && empty($_POST['given2']))
                      {
                        echo "NO GIVEN!";
                      }
                      elseif(empty($_POST['given1']))
                      {
                        echo "NO 1ST GIVEN!";
                      }
                      elseif(empty($_POST['given2']))
                      {
                        echo "NO 2ND GIVEN!";
                      }
                      elseif(!empty($_POST['given1']) && !empty($_POST['given2']))
                      {
                        $given1 = $_POST['given1'];
                        $given2 = $_POST['given2'];

                        if ($given1 > $given2)
                        {
                          $temp = $given1;
                          $given1 = $given2;
                          $given2 = $temp;
                        }
                        for($i = 1; $i < ($given1+1); $i++)
                        {
                          if ($given1%$i == 0 and $given2%$i == 0)
                            $gcd = $i;
                        }
                        echo "GCD of $given1 and $given2 is: $gcd";
                      }
                    }
                    ?>
                </form>
            </div>
          </div>
        </body>
</html>
