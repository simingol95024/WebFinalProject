<?php

class Cprotection extends CI_Controller{


    function __construct(){
        parent::__construct(); 
        $this->load->dbutil();
        $this->load->library('form_validation','session');
        $this->lang->load('main',$this->session->userdata('language'));
        $this->session->set_userdata('lastvisited',current_url()); 
        static $db_name = "";
        $this->load->helper('file');
    }

    function index(){
      $this->load->view('protection_view.php');
      $this->session->set_userdata('lastvisited',current_url());
    
    }
    function connection_view(){
      $this->load->view('connection');
      
    }
    function connection(){
      $this->load->database();

      $user=$this->input->post('username');
      $pass = $this->input->post('password');
      
      $config['hostname'] = 'localhost';
      $config['username'] = '$user';
      $config['password'] = '$pass';
      $config['database'] = 'jrs';
      $config['dbdriver'] = 'mysqli';
      $config['dbprefix'] = '';
      $config['pconnect'] = FALSE;
      $config['db_debug'] = TRUE;
      $config['cache_on'] = FALSE;
      $config['cachedir'] = '';
      $config['char_set'] = 'utf8';
      $config['dbcollat'] = 'utf8_general_ci';
      //$DB1=$this->load->database($config);

      $DB1 = $this->load->database('test', TRUE);
      $q = $DB1->query("SELECT * FROM account");
      //print_r($q);

      $this->load->view('index2.php');

      
    }

    

    function encreption(){
      $this->load->library('encryption');

      // Get a hex-encoded representation of the key:
      $key = bin2hex($this->encryption->create_key(16));

      // Put the same value in your config with hex2bin(),
      // so that it is still passed as binary to the library:
      $config['encryption_key'] = hex2bin($key);


      $this->encryption->initialize(
        array(
                'cipher' => 'aes-256',
                'mode' => 'ctr',
                'key' => '<a 32-character random string>'
        )
      );


      // Switch to the MCrypt driver
        $this->encryption->initialize(array('driver' => 'mcrypt'));

        // Switch back to the OpenSSL driver
        $this->encryption->initialize(array('driver' => 'openssl'));
        

        $plain_text = 'This is a plain-text message!';
        $ciphertext = $this->encryption->encrypt($plain_text);
        echo $ciphertext;
        // Outputs: This is a plain-text message!
        echo $this->encryption->decrypt($ciphertext);



    }


    function backup(){
    
		$this->load->dbutil();
    $prefs = array(     
            'format' => 'zip',             
            'filename' 
            => 'backup--'. date("Y-m-d-H-i-s") .'.sql'
          );
    $backup =$this->dbutil->backup($prefs); 
    $save = 'assets/upload/mydb.zip';
    $this->load->helper('file');
    write_file($save, $backup);
    $this->load->helper('download');
    force_download('mydb.zip', $backup);
    
    
    }
    // function backup1(){
     
    //   $this->load->dbutil();
    //   $backup = $this->dbutil->backup(); 
    //   $this->load->helper('file');
    //   write_file('assets/upload/mybackup.gz', $backup);
    //   $this->load->helper('download');
    //   force_download('mybackup.gz', $backup);
    // }


    function restore_view(){
      $this->load->view('recover'); 
    }
    function restoredb()
    {
      $this->load->dbutil();
      $filename = $this->input->post('file');
      $isi_file 
      = file_get_contents('assets/upload/'.$filename);
      $string_query = rtrim( $isi_file, '\n;' );
      $array_query = explode(';',$$string_query);
      foreach($array_query as $query)
      {
        $this->db->query($query);
        echo "<br>";
      }
      echo "restore";
    }


   

    function backup_txt(){
      $this->load->dbutil();
      $prefs = array(
        'tables'        => array('account', 'class'),   // Array of tables to backup.
        'ignore'        => array(),                     // List of tables to omit from the backup
        'format'        => 'txt',                       // gzip, zip, txt
        'filename'      => 'jrs.sql',              // File name - NEEDED ONLY WITH ZIP FILES
        'add_drop'      => TRUE,                        // Whether to add DROP TABLE statements to backup file
        'add_insert'    => TRUE,                        // Whether to add INSERT data to backup file
        'newline'       => "\n"                         // Newline character used in backup file
        );

        $backup=$this->dbutil->backup($prefs);
        $db_name = 'mydb'. date("Y-m-d-H-i-s") .'.txt';
        $save = 'assets/upload'.$db_name;
        $this->load->helper('file');
        write_file($save, $backup); 
        $this->load->helper('download');
        force_download($db_name, $backup); 

    }

    function lock(){
       
      $this->db->query('LOCK TABLE account WRITE');
      
      $this->db->query('SELECT * FROM account');
      sleep(2);
      $this->db->query('UNLOCK TABLES');
   
      redirect('Cprotection/index');
    }

    
    function lock2(){
        
      $this->db->query('LOCK TABLE account READ');
      
      $this->db->query('INSERT INTO account');
      sleep(20);
      $this->db->query('UNLOCK TABLES');
    
      redirect('Cprotection/index');
    }



    function list_dbs(){
     
      if ($this->dbutil->database_exists('jrs'))
      {
        echo "exits<br> list of databases:<br>";
        $dbs = $this->dbutil->list_databases();
        foreach ($dbs as $db)
        {
                echo $db."<br>";
        }
              
      }
    }

    function cheek_db(){
      if ($this->dbutil->database_exists('jrs'))
      {
              echo "exits";
      }
    }




    function export_csv(){
      $this->load->dbutil();

      $query = $this->db->query("SELECT * FROM student");
      $query2 = $this->db->query("SELECT * FROM account");
      $delimiter = ",";
      $newline = "\r\n";
      $enclosure = '"';
      echo $this->dbutil->csv_from_result
      ($query, $delimiter, $newline, $enclosure);
      
      echo $this->dbutil->csv_from_result
      ($query2, $delimiter, $newline, $enclosure);
          }

          function getFeeRelatedTableBackups()
          {
              $this->load->dbutil();
              $this->load->helper('url');
              $this->load->helper('file');
              $this->load->helper('download');
              $this->load->library('zip');
              $prefs = array(
                   'tables'        => array('table1', 'table2', 'table3'),   // Array of tables to backup.
                 'ignore'        => array(),                     // List of tables to omit from the backup
                  'format'        => 'sql',                       // gzip, zip, txt
                 'filename'      => 'mybackup.sql',              // File name - NEEDED ONLY WITH ZIP FILES
                  'add_drop'      => TRUE,                        // Whether to add DROP TABLE statements to backup file
                  'add_insert'    => TRUE,                        // Whether to add INSERT data to backup file
                  'newline'       => "\n"                         // Newline    character used in backup file
               );
       
             $backup=& $this->dbutil->backup($prefs);
             $dbname='backup-on-'.date('Y-m-d-h:i:s').'.sql';
             $save=UPLOAD_PATH_FEE_MANAGEMENT_TABLES.$dbname;
             write_file($save,$backup);
             force_download($dbname,$backup);
       
            }






            
            function create_user_load(){
              $this->load->view('create_user_view');
            }

            function createUser(){
              $this->load->model('protection');
              $username = $this->input->post('username');
              $password = $this->input->post('password');
              $this->protection->create_user($username,$password);
              redirect('Cprotection/create_user_load');

            }

            function getGrant(){
              $this->load->model('protection');
              $username = $this->input->post('username');
              $this->protection->revock($username);
              redirect('Cprotection/create_user_load');
            }
            function setGrant(){
              $this->load->model('protection');
              $username = $this->input->post('username');
              $this->protection->grant($username);
              redirect('Cprotection/create_user_load'); 
            }


          
  }