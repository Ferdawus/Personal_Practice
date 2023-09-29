        <?php 
            class Task{
                public $name;
                public $status;
                public  $members = [];

                /**
                 * Class constructor.
                 */
                public function __construct(array $member = [])
                {
                    $this->members = $member;
                }

                public function setName($name)
                {
                    $this->name = $name;
                }
                public function changeStatus()
                {
                    
                } 
                // public function __toString() {
                //     return "Task: {$this->name}, Status: {$this->status}";
                // }           
            }
            class Member{
                public static function setMembers($member)
                {
                    Task::$members[] = $member;
                }
            }
            $task_one = new Task([new Member()]);
            $task_two = new Task();
            $task_one->setName('Ferdawus');
            echo $task_one->name;
            // Member::setMembers('m1');
    ?>