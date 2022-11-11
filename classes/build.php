<?php
class Build{
    public function buildFormsPage($arrayOfData) {
        echo "<body>
            <a href='index.php'></a>
        </body>
        </html>";

        foreach ($arrayOfData as $data) {
            echo "<div class='form'>
                <div class='form__header'>
                    <div class='form__header__number'>
                        <p>№</p>
                        <p>$data->id</p>
                    </div>
                    <div class='form__header__name'>
                        <p>$data->name</p>
                        <p>$data->surname</p>
                    </div>
                    <div class='form__header__social'>
                        <a href='$data->instagram'><img src='img/instagram.png' alt='instagram'></a>
                        <a href='$data->facebook'><img src='img/facebook.png' alt='facebook'></a>
                    </div>
                </div>
                <div class='form__body";
        }
    }   
}


?>

