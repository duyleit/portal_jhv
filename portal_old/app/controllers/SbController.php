<?php

use Phalcon\Mvc\Model\Criteria;
use Swift_SmtpTransport;
use Swift_Mailer;
use Swift_Message;

class SbController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }


    /**
     * Creates a new portal_suggestion
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "sb",
                'action' => 'index'
            ]);

            return;
        }

        $sb = new PortalSuggestion();
        $sb->email = $this->request->getPost("email");
        $sb->fullname = $this->request->getPost("fullname");
        $sb->department = $this->request->getPost("department");
        $sb->title = $this->request->getPost("title");
        $sb->message = $this->request->getPost("message");


        if (!$sb->save()) {
            foreach ($sb->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "sb",
                'action' => 'index'
            ]);

            return;
        }

        $this->suggestionBoxEmail($sb);

        $this->flash->success("Suggestion was created successfully");

        return $this->response->redirect('sb/thanks');
//        $this->dispatcher->forward([
//            'controller' => "sb",
//            'action' => 'thank'
//        ]);
    }

    public function thanksAction()
    {
        $this->view->notice = "Cảm ơn bạn vì đã gửi góp ý, chúng tôi sẽ hồi đáp trong thời gian sớm nhất có thể!<br />感谢您提交意见，我们会尽快与您联系!";
    }


    /**
     * @return mixed
     */
    public function suggestionBoxEmail($sb)
    {
//        $dept_meeting = Department::findFirstByCode($sb->dept_code);
//        $dept_sender = Department::findFirstByCode($this->user->dept_code);

        $emailBody = '
            <div style="border: #eaeaea 1px solid; padding: 35px 20px; margin: auto; width: 480px;">
                <table style="width: 100%;" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td style="border: #eeeeee 1px solid; padding:2px 5px;">Họ và tên 全名</td>
                            <td style="border: #eeeeee 1px solid; padding:2px 5px;">'.$sb->fullname.'</td>
                        </tr>
                        <tr>
                            <td style="border: #eeeeee 1px solid; padding:2px 5px;">Bộ phận 部门</td>
                            <td style="border: #eeeeee 1px solid; padding:2px 5px;">'.$sb->department.'</td>
                        </tr>
                        <tr>
                            <td style="width: 50%;border: #eeeeee 1px solid; padding:2px 5px;">Email 电子邮件</td>
                            <td style="width: 50%;border: #eeeeee 1px solid; padding:2px 5px;">'.$sb->email.'</td>
                        </tr>
                        <tr>
                            <td style="padding:2px 5px;"><strong>Nội dung 详情:</strong></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <p>'.$sb->message.'</p>
            </div>
            <p style="text-align: center">Sent from Jiahsin Internal Portal</p>';


        $emailReceiverList = 'Kevin.Chou@JiaHsin.com.vn;justin.hsu@jiahsin.com.vn;Anh.Nguyen@jiahsin.com.vn;Ethan.Wang@jiahsin.com.vn';
        $email = [
            'replyTo' => $sb->email,
            'to' => explode(';',str_replace([';;',';;;',';;;;'],';',$emailReceiverList)),
//            'bcc' => 'WebApp.JHV@jiahsin.com.vn',
            'subject' => 'Góp Ý 意見箱: ' . $sb->title,
            'body' => $emailBody,
        ];

        // Create the Transport
        $transport = (new Swift_SmtpTransport($this->config->smtp_jhv->host, $this->config->smtp_jhv->port))
            ->setUsername($this->config->smtp_jhv->user)
            ->setPassword($this->config->smtp_jhv->pass)
        ;

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);

        // Create a message
        $message = (new Swift_Message($email['subject']))
            ->setFrom([$this->config->smtp_jhv->user => $this->config->smtp_jhv->name])
            ->setReplyTo($email['replyTo'])
            ->setTo($email['to'])
//            ->setBcc($email['bcc'])
            ->setBody($email['body'], 'text/html')
        ;

        // Send the message
        $mailer->send($message);

    }

}

