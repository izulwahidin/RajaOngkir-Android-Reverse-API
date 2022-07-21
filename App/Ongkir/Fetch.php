<?php namespace Wahidin\Ongkir\Fetch;

class get{
    public static function data($courier, $from_to, $weight=1000){

        $query['courier'] = $courier['name'];
        $query['destination'] = $from_to->destination;
        $query['destinationType'] = $from_to->destinationType;
        $query['origin'] = $from_to->origin;
        $query['originType'] = $from_to->originType;
        $query['volume'] = $courier['volume'];
        $query['volumetric'] = 1;
        $query['weight'] = $weight;
        $post_data = http_build_query($query);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://android.rajaongkir.com/api/pro/cost');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query));

        $headers = array();
        $headers[] = 'Content-Length: '.strlen($post_data);
        $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
        $headers[] = 'Host: android.rajaongkir.com';
        $headers[] = 'Connection: Keep-Alive';
        $headers[] = 'User-Agent: RajaOngkir Android';
        $headers[] = 'Accept-Encoding: gzip';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = @json_decode(curl_exec($ch))->rajaongkir;
        if (curl_errno($ch)) {
            throw new Exception('Error when trying to Fetch data: ' . curl_error($ch), 1);
        }
        curl_close($ch);
        if(!$result) throw new \Exception("Error ~ Data not Found", 1);
        return $result;
    }
}
