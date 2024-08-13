<?Php 

class HomeController{
    private $userModel;

    public function __construct() {
        $this->userModel = new user();
    }

    public function index(){
        $user = $this->userModel->getAllUser();
        require '../app/views/home.php';
        // require '../views/home.php';
    }
}
?>