<?php

use andframe\src\Core\Model;

class Model_Orders extends Model
{
	
	public function get_data()
	{	
		
		// Здесь я просто сэмулирую данные о товаре.
		
		return array(
			
			array(
				'Year' => '2017',
				'Item' => 'Xiaomi Mi Band 2 <img src="/images/xiaomi_mi.jpg" align="left" >',
				'Description' => 'Браслет Фитнес-тренер'
			),

			array(
				'Year' => '2017',
				'Item' => 'Motorola MOTO G4 (XT1622) <img src="/images/motorola.jpg" align="left" >',
				'Description' => 'Экран (5.5", IPS, 1920x1080)/ Qualcomm Snapdragon 617 (1.5 ГГц)/ основная камера: 13 Мп, фронтальная камера: 5 Мп/ RAM 2 ГБ/ 16 ГБ встроенной памяти + microSD/SDHC (до 128 ГБ)/ 3G/ LTE/ GPS/ поддержка 2х SIM-карт (Micro-SIM)/ Android 6.0 (Marshmallow) / 3000 мА*ч'
			),

			array(
				'Year' => '2017',
				'Item' => 'HP 250 G5 (X0P75ES) <img src="/images/hp-notebook.jpg" align="left" >',
				'Description' => 'Экран 15.6” SVA (1366x768) HD, матовый / Intel Pentium N3710 (1.6 - 2.56 ГГц) / RAM 4 ГБ / HDD 500 ГБ / Intel HD Graphics 405 / без ОД / LAN / Wi-Fi / Bluetooth / веб-камера / DOS / 1.96 кг / черный'
			),

        );
	}

}
