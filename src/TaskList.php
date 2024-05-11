<?php
require_once 'TaskStatus.php';



class TaskList {
    private array $tasks = [];

    public function __construct() {
        $this->loadTasks();
    }

    public function addTask($taskName, $priority):void {
        $task = [
            'id' => uniqid(),
            'name' => $taskName,
            'priority' => $priority,
            'status' => 'не виконано'
        ];
        $this->tasks[] = $task;
        $this->saveTasks();
    }

    public function deleteTask($taskId):void {
        foreach ($this->tasks as $key => $task) {
            if ($task['id'] === $taskId) {
                unset($this->tasks[$key]);
                $this->saveTasks();
                break;
            }
        }
    }

    public function getTasks(): array
    {
        usort($this->tasks, function($a, $b) {
            return $b['priority'] - $a['priority'];
        });
        return $this->tasks;
    }

    public function completeTask($taskId):void {
        foreach ($this->tasks as &$task) {
            if ($task['id'] === $taskId) {
                $task['status'] = 'виконано';
                break;
            }
        }
        $this->saveTasks();
    }

    private function loadTasks(): void
    {
        $json = file_get_contents('tasks.json');
        $this->tasks = json_decode($json, true);
    }

    private function saveTasks(): void
    {
        file_put_contents('tasks.json', json_encode($this->tasks));
    }
}

?>


    **task_status.php (файл з переліченням станів завдань):**
    PHP
    
    
<?php






