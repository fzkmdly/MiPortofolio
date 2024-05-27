<?php

namespace App\Controllers;

use App\Models\PersonalContact;
use App\Models\PersonalData;
use App\Models\PersonalEdu;
use App\Models\PersonalProject;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index(): string
    {
        // Instantiate the models
        $personalDataModel = new PersonalData();
        $personalEduModel = new PersonalEdu();
        $personalContactModel = new PersonalContact();
        $personalProjectModel = new PersonalProject();

        // Retrieve data from each model
        $data['personalData'] = $personalDataModel->findAll();
        $data['personalEdu'] = $personalEduModel->findAll();
        $data['personalContact'] = $personalContactModel->findAll();
        $data['personalProject'] = $personalProjectModel->findAll();

        return view('body', $data);
    }

    public function sendEmail()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name'    => 'required',
            'email'   => 'required|valid_email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $name    = $this->request->getPost('name');
        $email   = $this->request->getPost('email');
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('message');

        $emailService = \Config\Services::email();

        $emailService->setFrom($email, $name);
        $emailService->setTo('faizakhmad29@gmail.com');
        $emailService->setSubject($subject);
        $emailService->setMessage($message);

        if ($emailService->send()) {
            return redirect()->back()->with('message', 'Your message has been sent. Thank you!');
        } else {
            log_message('error', 'Failed to send email: ' . $emailService->printDebugger(['headers']));
            return redirect()->back()->with('error', 'Unable to send your message. Please try again later.');
        }
    }

    public function suharto(): string
    {
        $data = [
            'itel' => "About me",
            'name' => "Tokio Chiyo",
            'email' => "TkChy@gmail.com"
        ];
        return view('Ngudud_dek!', $data);
    }
}
