<?php
 
class HotelTableSeeder extends Seeder {
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	//$vader = '';
	$xml = simplexml_load_file('http://www.safarinow.com/lib/hbef/xmlapi/search.aspx?query=establishments&i=nIRf29m&fid=321|342&lid=1003');
        foreach($xml->product as $key) {
		$fileParts = pathinfo($filePath);
		$destinationPath = 'uploads/'.str_random(8);
		$data = file_get_contents($file);
		file_put_contents($new, $data);
	$vader = DB::table('hotels')->insert([
                'id'   => $key->id,
                'type'      => $key->type,
                'typedesc'   => $key->typedesc,
                'name' => $key->name,
                'shortdesc'  => $key->shortdesc,
				'rating'   => $key->rating,
                'status'      => $key->status,
                'available'   => $key->available,
                'url' => $key->url,
                'image1'  => $key->image1,
				'Gallery'   => $key->Gallery->Image1.','.$key->Gallery->Image2.','.$key->Gallery->Image3.','.$key->Gallery->Image4.','.$key->Gallery->Image5.','.$key->Gallery->Image6.','.$key->Gallery->Image7.','.$key->Gallery->Image8.','.$key->Gallery->Image9.','.$key->Gallery->Image10,
                'responsehours'      => $key->responsehours,
                'destinations'   => $key->destinations,
                'tradingcurrency' => $key->tradingcurrency,
                'minpps'  => $key->minpps,
                'maxpps' => $key->maxpps,
				'minunit' => $key->minunit,
				'maxunit' => $key->maxunit,
				'longitude' => $key->longitude,
				'latitude' => $key->latitude,
				'smileyRating' => $key->smileyRating,
				//'minsingle' => $key->minsingle,
				//'maxsingle' => $key->maxsingle,
				'booknow' => $key->booknow,
				'created_at' => new DateTime(),
                'updated_at' => $key->updated
            ]);
		}
    }
 
}