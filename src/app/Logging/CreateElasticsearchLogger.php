<?php

namespace App\Logging;

use Elastic\Elasticsearch\ClientBuilder;
use Monolog\Handler\ElasticsearchHandler;
use Monolog\Logger;

class CreateElasticsearchLogger
{
  /**
   * Create a custom Monolog instance.
   *
   * @param  array  $config
   * @return \Monolog\Logger
   */
  public function __invoke(array $config)
  {
    $logger = new Logger('elasticsearch');

    //create the client
    $client = ClientBuilder::create()
      ->setHosts(['http://logging-elasticsearch.internal:9200'])
      ->build();

    //create the handler
    $options = [
      'index' => 'user_logs',
      'type' => '_doc'
    ];
    $handler = new ElasticsearchHandler($client, $options, Logger::INFO, true);

    $logger->setHandlers(array($handler));

    return $logger;
  }
}
