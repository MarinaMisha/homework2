<?php
require_once 'TaskStatus.php';



class TaskList extends TaskStatus {
    private array $tasks = [];
    private string $fileName = '';
    public function __construct($fileName) {
        $this->fileName = $fileName;
        $this->loadTasks();
    }

    public function addTask($taskName, $priority):void {
        if ($priority > 10 || $priority < 0) {
            return;
        }
        $task = [
            'id' => uniqid(),
            'name' => $taskName,
            'priority' => $priority,
            'status' => 'To do'
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
                $task['status'] = self::NOT_COMPLETED;
                break;
            }
        }
        $this->saveTasks();
    }

    private function loadTasks(): void
    {
        $json = file_get_contents($this->fileName);
        if($json) {
            $this->tasks = json_decode($json, true);
        }
    }

    private function saveTasks(): void
    {
        file_put_contents($this->fileName, json_encode($this->tasks));
    }
}

$tasks = new TaskList('tasks.json');
$tasks->addTask('Clean the room', 1);
$tasks->addTask('Make breakfast', 2);
$tasks->addTask('Wash my hair', 3);
$tasks->addTask('do my homework', 4);
$tasks->completeTask($tasks->getTasks()[0]['id']);






