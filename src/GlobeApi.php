<?php

namespace CoreDev\LaravelGlobeLabs;

use GuzzleHttp\Client;

class GlobeApi
{
	protected $client;

	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function send(string $number, string $message, string $passphrase, string $app_id, string $app_secret, string $short_code, ?string $mask_name = null)
	{
		$url = 'outbound/' . $short_code . '/requests/';

		$params = [
			'form_params' => [
				'address' => $number,
				'message' => $message,
				'passphrase' => $passphrase,
				'app_id' => $app_id,
				'app_secret' => $app_secret
			]
		];

		if (!is_null($mask_name)) {
			$params = [
				'form_params' => array_merge($params['form_params'], ['mask' => $mask_name])
			];
		}

		$response = $this->client->post($url, $params);

		return $response;

	}
}