<?php
require 'vendor/autoload.php';
use \Firebase\JWT\JWT;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$privateKey = <<<EOD
{"kty":"RSA","n":"uFlZROTdR_E3eC87fUv4Mr2YxqVcijlYAUUohWCdcRUJh9vxw3OfhYftNGHcpfJHcUnZsxHYGBsxIMZIptxJ-zWdryhjehIHwkYxpMqwMUugNQHZhxuWTbsJ9nFDwhcvs2cJm42WCTWWoao0MN78w8BOpUoWWNXO1nUW1lyiDPgZP5rsnTOqcp9RVwjx-Irs6x70kqAFVk8CrBhMnnIKvvVv0GncPkESKXpEIfAL5U1ELHovpqgmnu44zP7RWNH9CgwcandJ0-Pzdm5gswvrk0DTGu3r3fh0zejrTecTeqrgxYqQ3opHsJxCsOvxFrVpEuacT12TJIL-ronSogdWEQ","e":"AQAB","d":"V4PTJSmhAu44bw29KBZQlYX8aRFHhTcD2FaEjgz3sR9TjvOTKj5RlIqayStMHFuQHu_4MVJfS9Jc2DpJcy1Q0bj6SpTZ5LF6jXfVSW4PhtdoDsH6CnHGQNByQlQy3okzU--uV_I3L9gI0maCsFCrniJFM6KgSTv3HUgot0ryg0TWDigb5rW_CizO6pqd3cTjeDAC6c3GQxiWOsyoxEZOYBqfSZBObibJslm_guNaFh1XwuCpbkmdTbWvQeoWyE8GpjerO45y5bvRNI7jNBYS2Rzp_cS8N6DivlcPBOXdgP-4Tx1hxfLS1URG3lMHZFqX6jQhsNnoD6S9GdP3z8I3IQ","p":"4bKKhLLyyX0kzp4etETEfkOR6eh-ROwjv-3sgcRaYAq4aPFbLBKyqOrdWXJvtiYgHi9CGsi9JZ5Ti02Ugdv0ZUm-LUYtr6i6jkHMKMcKHvz4VBXO-D3WGmt7ZcpFDk-pVaCfG7Lr73_CrxRSGUs58Ozx0A87eDs7vtHrnLSYeX8","q":"0RmegkFk-GTTXiClL1lOfF7ZgbrpeCE-E4Rq0zRIW1SEprrbJVq2Cj9PB0gyF4dLUILo20bzy46AgO-0XBtUFuKdLXP9YzwW-PvCNlFNxZ25O1P94-xA8WW0TpUJagYZoBYxjkntQ6bzR-O-dhz1m8lvuuWoYlII8DkpWtNZWG8","dp":"JgNKLTtuhN0c--fJyBbk-VcsFjdgPP-ArezGrryBdDeaA6LS9kNX7_dOvKf3hLg7JJpVCenRYaqe65Fvd8eyC_U1oK53N2S1twwB9MRBQiLdOFxL9aeEjgKYT_aXVue334IkCihCcJ4WDiLgCP6QjbF6sM4_9-oSD_uPMV-BZsU","dq":"OO-F5qfRy4UAvM-cyvDBW0IkbZuseMZsdboHsGy7CwtPd2rHwzsY-F9WsH_rC9cOHeUXbKW8OoAZ44HhlXbnhbe83qSHqV6yTqeWsV2gFKAm0M3FAyvQXyq3VvJj9tekYJ_KbJkanuI1uix8LwMhqYLHBpgEKol135tg9Fc6K8c","qi":"Znxh6PokPZca0pJjgWLGN0MuQm_H3w-amWxInz2QXw5iTdwtGgfxcLc2fUC6bNdIKEL629rg5gO7vBBtaSCdS0dGAGPuQf0VYA2KDgMvHdqwsJbZ3rZuCgYxRwwMRG1iebE4Z77uzwjoT4d5vjIpuZnhXU58VYwnwUwdgU6yPIU"}
EOD;

// NOTE: Before you proceed with the TOKEN, verify your users session or access.

$payload = array(
  "sub" => "123", // unique user id string
  "name" => "John Doe", // full name of user

  // Optional custom user root path
  // "https://claims.tiny.cloud/drive/root" => "/johndoe",

  "exp" => time() + 60 * 10 // 10 minute expiration
);

try {
  $token = JWT::encode($payload, $privateKey, 'RS256');
  http_response_code(200);
  header('Content-Type: application/json');
  echo json_encode(array("token" => $token));
} catch (Exception $e) {
  http_response_code(500);
  header('Content-Type: application/json');
  echo $e->getMessage();
}
?>
