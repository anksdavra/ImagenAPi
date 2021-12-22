<?php

namespace App\Command;

use App\Http\ImagenApiClientInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Serializer\SerializerInterface;

class ImportImagenRecordCommand extends Command
{

    protected static $defaultName = 'app:import-imagen-record';

    /**
     * @var ImagenApiClientInterface
     */
    private ImagenApiClientInterface $imagenApiClient;

    /**
     * @var SerializerInterface
     */
    private SerializerInterface $serializer;


    public function __construct(ImagenApiClientInterface $imagenApiClient, SerializerInterface $serializer)
    {
        $this->imagenApiClient = $imagenApiClient;

        $this->serializer = $serializer;

        parent::__construct();
    }

    protected function configure()
    {
        $this->setDescription(' Import record to Imagen API');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $response = $this->imagenApiClient->importRecord();

        if ($response->getStatusCode() !== 200) {

            $output->writeln($response->getContent());

            return Command::FAILURE;
        }

        /** @var Stock $stock */
        $stock = $this->serializer->deserialize($response->getContent(), Stock::class, 'json');

        $output->writeln( ' Record has been saved / updated.');

        return Command::SUCCESS;
    }
}
