<?php

namespace App\Command;

use App\Entity\User;
use App\Entity\Patient;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;

class CreateTestPatientCommand extends Command
{
    protected static $defaultName = 'app:create-test-patient';
    
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setDescription('Creates a test patient');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            // Create User
            $user = new User();
            $output->writeln('Creating user with email: john.doe@example.com');
            $user->setEmail('john.doe@example.com');
            $user->setRoles(['ROLE_PATIENT']);
            $user->setPassword('$2y$13$examplehash');
            $user->setFirstName('John');
            $user->setLastName('Doe');

            // Create Patient
            $patient = new Patient();
            $output->writeln('Creating patient with details:');
            $output->writeln(' - Dossier: default.pdf');
            $output->writeln(' - Gender: male');
            $output->writeln(' - Address: 123 Main St');
            $output->writeln(' - Phone: 1234567890');
            $output->writeln(' - Name: John Doe');
            $patient->setDossierMedicalPath('default.pdf');
            $patient->setGener('male');
            $patient->setAdresse('123 Main St');
            $patient->setPhone(1234567890);
            $patient->setName('John Doe');
            $patient->setUser($user);


            // Persist and flush
            $this->entityManager->persist($user);
            $this->entityManager->persist($patient);
            $this->entityManager->flush();

            $output->writeln('Successfully created test patient');
            return Command::SUCCESS;
        } catch (UniqueConstraintViolationException $e) {
            $output->writeln('<error>Error: A user with this email already exists</error>');
            return Command::FAILURE;
        } catch (\Doctrine\DBAL\Exception\DriverException $e) {
            $output->writeln('<error>Database error: ' . $e->getMessage() . '</error>');
            $output->writeln('<comment>Check your database connection and schema</comment>');
            return Command::FAILURE;
        } catch (\Exception $e) {
            $output->writeln('<error>Error: ' . $e->getMessage() . '</error>');
            $output->writeln('<comment>Stack trace:</comment>');
            $output->writeln($e->getTraceAsString());
            return Command::FAILURE;
        }
    }

}
