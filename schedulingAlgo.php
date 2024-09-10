<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/style.css" />
        <link rel="stylesheet" href="./assets/css/algo.css">
        <link rel="stylesheet" href="./assets/css/algoContent.css" />
        <link rel="stylesheet" href="./assets/css/tabs.css" />
        <link rel="stylesheet" href="./assets/css/header.css" />
        <title>Scheduling Algorithms</title>
        <script src="./assets/js/tabs.js"></script>
    </head>

    <body>
        <?php
    $title_1 = "Scheduling";
    $title_2 = "Algorithms";
    $main_desc = "CPU Scheduling is a process of determining which process will own CPU for execution while another process is on hold. The main task of CPU scheduling is to make sure that whenever the CPU remains idle, the OS at least select one of the processes available in the ready queue for execution. The selection process will be carried out by the CPU scheduler.It selects one of the processes in memory that are ready for execution.";

    include "./components/header.php";
    ?>

        <div class="tabs-container flex-layout ">
            <div data-tab="fcfs" class="sa tab h4 active-tab flex-layout justify-center items-center text-uppercase">
                FCFS
            </div>
            <div data-tab="sjf" class="sa tab h4 flex-layout justify-center items-center text-uppercase">
                SJF
            </div>
            <div data-tab="ljf" class="sa tab h4 flex-layout justify-center items-center text-uppercase">
                LJF
            </div>
            <div data-tab="rr" class="sa tab h4 flex-layout justify-center items-center text-uppercase">
                RR
            </div>
            <div data-tab="lrtf" class="sa tab h4 flex-layout justify-center items-center text-uppercase">
                LRTF
            </div>
            <div data-tab="srtf" class="sa tab h4 flex-layout justify-center items-center text-uppercase">
                SRTF
            </div>
            <div data-tab="priority" class="sa tab h4 flex-layout justify-center items-center text-uppercase">
                Priority
            </div>
        </div>

        <div id="fcfs" class="tab-view">
            <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
                <h1>First Come First Serve</h1>
            </div>
            <br><br>
            <?php
        $algoName = "FCFS";
        $algoDesc = "In the FCFS scheduling algorithm, the job that arrived first in the ready queue is allocated to the CPU and then the job that came second and so on. We can say that the ready queue acts as a FIFO (First In First Out) queue thus the arriving jobs/processes are placed at the end of the queue.
        FCFS is a non-preemptive scheduling algorithm as a process holds the CPU until it either terminates or performs I/O. Thus, if a longer job has been assigned to the CPU then many shorter jobs after it will have to wait. This algorithm is used in most of the batch operating systems.
        ";

        $algoAdv = "FCFS algorithm is simple, easy to implement and understand.
        <br>
        Better for processes with large burst time as there is no context switch involved between processes.
        <br>
        It is a fair algorithm as priority is not involved, processes that arrive first get served first.
        ";
        $algoDisAdv = "Convoy effect occurs i.e. all small processes have to wait for one large process to get off the CPU.
        <br>
        It is non-preemptive, the process will not release the CPU until it finishes its task and terminates.
        <br>
        Average waiting time is high and the turnaround time is unpredictable which leads to poor performance.
       
        ";

        include "./components/algoContent.php"; ?>
            <br><br>
            <?php include "./schedulingAlgo/FCFS.php"; ?>
            <br><br>
        </div>
        <div id="sjf" class="tab-view">
            <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
                <h1>Shortest Job First</h1>
            </div>
            <br><br>
            <?php
        $algoName = "SJF";
        $algoDesc = " Is an algorithm in which the process having the smallest execution time is chosen for the next execution. This scheduling method can be preemptive or non-preemptive. It significantly reduces the average waiting time for other processes awaiting execution. The full form of SJF is Shortest Job First. ";

        $algoAdv = "SJF is frequently used for long term scheduling.
        <br>
        It reduces the average waiting time over FIFO (First in First Out) algorithm.
        <br>
        The SJF method gives the lowest average waiting time for a specific set of processes.
        <br>
        It is appropriate for the jobs running in batches, where run times are known in advance.
       
        ";
        $algoDisAdv = "Job completion time must be known earlier, but it is hard to predict.
        <br>
        It is often used in a batch system for long term scheduling.
        <br>
        SJF can't be implemented for CPU scheduling for the short term. It is because there is no specific method to predict the length of the upcoming CPU burst.
        <br>
        This algorithm may cause very long turnaround times or starvation.
        <br>
        Requires knowledge of how long a process or job will run.
        
        ";

        include "./components/algoContent.php"; ?>
            <br><br>
            <?php include "./schedulingAlgo/SJF.php"; ?>
            <br><br>
        </div>
        <div id="ljf" class="tab-view">
            <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
                <h1>Longest Job First</h1>
            </div>
            <br><br>
            <?php
        $algoName = "LJF";
        $algoDesc = " In Longest Job First the process having the largest burst time is the next to be executed. It is non-pre-emptive so when a process starts its execution, it cannot be interrupted and any other process will be executed once the assigned process has completed being processed and has been terminated.
        ";

        $algoAdv = " No process can complete until the longest job also reaches its completion.<br>
        All the processes approximately finish at the same time.
       ";
        $algoDisAdv = "The waiting time is high.<br>
        Processes with smaller burst time may starve for CPU.
       ";

        include "./components/algoContent.php"; ?>
            <br><br>
            <?php include "./schedulingAlgo/ljf.php"; ?>
            <br><br>
        </div>
        <div id="rr" class="tab-view">
            <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
                <h1>Round Robin</h1>
            </div>
            <br><br>
            <?php
        $algoName = "RR";
        $algoDesc = "Round Robin Scheduling is a preemptive process in which the CPU is assigned to the process on the basis of FCFS (First Come First Serve) for a fixed amount of time. The fixed amount of time is known as a time quantum or a time slice. Once this time quantum ends, the running process is preempted and sent to the ready queue and the processor is assigned to the next arrived process.
        ";

        $algoAdv = "It gives the best performance in terms of average response time.<br>
        It is best suited for time sharing systems, client server architecture and interactive systems.<br>
       Every process gets an equal share of the CPU.<br>
       RR is cyclic in nature, so there is no starvation.<br>
        
       ";
        $algoDisAdv = " It leads to starvation for processes with larger burst time as they have to repeat the cycle many times.<br>
        Its performance heavily depends on time quantum.<br>
        Priorities cannot be set for the processes.<br>
       Average waiting time under the RR policy is often long.
       ";

        include "./components/algoContent.php"; ?>
            <br><br>
            <?php include "./schedulingAlgo/rr.php"; ?>
            <br><br>
        </div>
        <div id="lrtf" class="tab-view">
            <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
                <h1>Least Running Time First</h1>
            </div>
            <br><br>
            <?php
        $algoName = "LRTF";
        $algoDesc = "Longest Remaining Time First is a scheduling algorithm used by the operating system to schedule the incoming processes so that they can be executed in a systematic way. In this algorithm, we find the process with the maximum remaining time and then process it. We check for the maximum remaining time after some interval of time (say 1 unit each) to check if another process having more Burst Time arrived up to that time.
        ";

        $algoAdv = "LRTF algorithm is simple and easy to implement.<br>
        Almost all the processes complete by the time the longest job reaches its completion.<br>
        Starvation-free as all processes get a fair share of CPU.
        ";
        $algoDisAdv = "The context switch consumes CPU’s valuable time which can be utilized for executing processes.<br>
        Smaller processes need to wait for CPU to finish larger burst size processes.
        ";

        include "./components/algoContent.php"; ?>
            <br><br>
            <?php include "./schedulingAlgo/lrtf.php"; ?>
            <br><br>
        </div>
        <div id="srtf" class="tab-view">
            <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
                <h1>Shortest Running Time First</h1>
            </div>
            <br><br>
            <?php
        $algoName = "SRTF";
        $algoDesc = "Shortest Remaining Time First (SRTF) is the preemptive version of SJF scheduling, where the processor is allocated to the job closest to completion. Here a short-term scheduler schedules the process with the least remaining burst time among available processes and running process. Once all the processes are in the ready queue, No preemption will be done and the algorithm will work as SJF scheduling.
        ";

        $algoAdv = "Many processes execute in less time. So, throughput is increased.<br>
        Processes which have short burst time run fast.
       ";
        $algoDisAdv = "Practically it is not possible to predict the burst time.<br>
        Processes which have a long burst time will have to wait for a long time for execution.
         
        ";

        include "./components/algoContent.php"; ?>
            <br><br>
            <?php include "./schedulingAlgo/srtf.php"; ?>
            <br><br>
        </div>
        <div id="priority" class="tab-view">
            <div class="page-heading flex-layout justify-center items-center text-uppercase white-text">
                <h1>Priority</h1>
            </div>
            <br><br>
            <?php
        $algoName = "Priority";
        $algoDesc = "Priority Scheduling is a method of scheduling processes that is based on priority. In this algorithm, the scheduler selects the tasks to work as per the priority. The processes with higher priority should be carried out first, whereas jobs with equal priorities are carried out on a round-robin or FCFS basis.
        ";

        $algoAdv = "Easy to use scheduling method.<br>
        Processes are executed on the basis of priority so high priority does not need to wait for long which saves time.
        ";
        $algoDisAdv = "If the system eventually crashes, all low priority processes get lost.<br>
        If high priority processes take lots of CPU time, then the lower priority processes may starve and will be postponed for an indefinite time.
        ";

        include "./components/algoContent.php"; ?>
            <br><br>
            <?php include "./schedulingAlgo/pr.php"; ?>
            <br><br>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"
            integrity="sha384-9/D4ECZvKMVEJ9Bhr3ZnUAF+Ahlagp1cyPC7h5yDlZdXs4DQ/vRftzfd+2uFUuqS" crossorigin="anonymous">
        </script>
    </body>

</html>