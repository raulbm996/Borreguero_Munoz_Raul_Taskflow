<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px;
            text-align: center;
        }

        header h1 {
            font-size: 2.8em;
            margin-bottom: 10px;
            font-weight: 600;
        }

        header p {
            opacity: 0.95;
            font-size: 1.2em;
            font-weight: 300;
        }

        main {
            padding: 40px;
        }

        h2 {
            color: #333;
            font-size: 2em;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 3px solid #667eea;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .task-item {
            padding: 20px 25px;
            margin-bottom: 15px;
            border-radius: 12px;
            border-left: 5px solid;
            background: #f8f9fa;
            transition: all 0.3s ease;
            font-size: 1.15em;
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .task-item::before {
            content: '○';
            font-size: 1.8em;
            margin-right: 18px;
            font-weight: bold;
            color: #999;
        }

        .task-item:hover {
            transform: translateX(8px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        /* Estilos para tareas completadas */
        .task-item.completed {
            background: #e8f5e9;
            text-decoration: line-through;
            opacity: 0.75;
        }

        .task-item.completed::before {
            content: '✓';
            color: #4caf50;
        }

        /* Estilos para prioridad ALTA */
        .task-item.priority-alta {
            border-left-color: #f44336;
        }

        .task-item.priority-alta::after {
            content: '🔴 Alta';
            margin-left: auto;
            font-size: 0.85em;
            padding: 6px 18px;
            background: #ffebee;
            border-radius: 25px;
            color: #c62828;
            font-weight: bold;
            letter-spacing: 0.5px;
        }

        /* Estilos para prioridad MEDIA */
        .task-item.priority-media {
            border-left-color: #ff9800;
        }

        .task-item.priority-media::after {
            content: '🟡 Media';
            margin-left: auto;
            font-size: 0.85em;
            padding: 6px 18px;
            background: #fff3e0;
            border-radius: 25px;
            color: #e65100;
            font-weight: bold;
            letter-spacing: 0.5px;
        }

        /* Estilos para prioridad BAJA */
        .task-item.priority-baja {
            border-left-color: #4caf50;
        }

        .task-item.priority-baja::after {
            content: '🟢 Baja';
            margin-left: auto;
            font-size: 0.85em;
            padding: 6px 18px;
            background: #e8f5e9;
            border-radius: 25px;
            color: #2e7d32;
            font-weight: bold;
            letter-spacing: 0.5px;
        }

        footer {
            background: #f8f9fa;
            padding: 30px;
            text-align: center;
            color: #666;
            border-top: 1px solid #e0e0e0;
        }

        footer p {
            margin: 5px 0;
        }

        .footer-link {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
        }

        .footer-link:hover {
            text-decoration: underline;
        }

        /* Lista vacía */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #999;
        }

        .empty-state h3 {
            font-size: 1.8em;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Bienvenido a <?php echo "TaskFlow"; ?></h1>
    </header>

    <main>
        <?php
        $tasks = [
            ['title' => 'Implementar Login', 'completed' => true, 'priority' => 'alta'],
            ['title' => 'Añadir Pruebas Unitarias', 'completed' => false, 'priority' => 'media'],
        ];
        foreach ($tasks as $task) {
            renderizarTarea($task);
        }
        ?>
    </main>


</body>

</html>