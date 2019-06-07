<?php

namespace App\Http\Controllers\Admin;

use App\Models\NotificationToken;

use App\Http\Controllers\Controller;
use DB;

class NotificationController extends Controller
{
    public function sendNotification() {
        $token_data = NotificationToken::get();
        // $curlConfig = array(
        //     "data" => 
        // );
        foreach ($token_data as $row) {
            echo "
                <script>
                    fetch('https://fcm.googleapis.com/fcm/send', {
                        method: 'POST',
                        body: '{\
                            \"data\": {\
                                    \"title\": \"title\",\
                                    \"body\": \"body\",\
                                    \"icon\": \"/my_avatar.jpg\"\
                            },\
                            \"to\": \"". $row->token ."\"\
                        }',
                        headers: {
                            'Content-Type': 'application/json',
                            'Authorization': 'key=AAAAkUp0XKk:APA91bFhfBVmDTdPNGq9WiORMdXZpkDwx3s_0Yf5PolpRTqBeM0-rMfsVuULE9hNW20MVMfmah1R0F_gXtiT2EEGCRIPyRXY0qQuV28B8ssZkiDCQ-UNaeFS8h_x62HNL15663-P2n9T'
                        }
                    })
                </script>
            ";
            // // $curlConfig[CURLOPT_POSTFIELDS]["to"] = $row->token;
            // // $ch = curl_init();
            // // curl_setopt_array($ch, $curlConfig);
            // // $result = curl_exec($ch);
            // // curl_close($ch);
            // $ch = curl_init();
            // curl_setopt($ch, CURLOPT_HEADER, 0);
            // curl_setopt($ch, CURLOPT_VERBOSE, 0);
            // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            //     'Content-Type: application/json',
            //     'Authorization: key=AAAAkUp0XKk:APA91bFhfBVmDTdPNGq9WiORMdXZpkDwx3s_0Yf5PolpRTqBeM0-rMfsVuULE9hNW20MVMfmah1R0F_gXtiT2EEGCRIPyRXY0qQuV28B8ssZkiDCQ-UNaeFS8h_x62HNL15663-P2n9T'
            // ));
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/fcm/send");
            // curl_setopt($ch, CURLOPT_POST, true);
            // $result = curl_exec($ch);
            // curl_close($ch);
        }
    }

    public function tokenSave(Request $request) {
        $token = $request.get("token");
        if($token) {
            NotificationToken::create([
                "token" => $token
            ]);
        }
    }

}
