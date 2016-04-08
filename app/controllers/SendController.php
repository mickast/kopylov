<?php
class SendController{
    public function actionSend(){
        echo "456";
        $postdata = http_build_query(
            array(
        'hello' => 'hellooo',
        'valera' => 'pidor'
    )
);

        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );

        $context  = stream_context_create($opts);

        $result = file_get_contents('78.85.71.32:8083/get.php', false, $context);

    }
}
?>