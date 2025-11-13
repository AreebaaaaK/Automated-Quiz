<?php
session_start();
$categories = ['All', 'Science', 'History', 'Mathematics', 'Geography', 'General Knowledge'];
$questions = [
    'Science' => [
        ['q' => 'What is the powerhouse of the cell?', 'opts' => ['A) Nucleus', 'B) Mitochondria', 'C) Ribosome', 'D) Lysosome'], 'correct' => 'B', 'diff' => 'Easy'],
        ['q' => 'Which gas do plants absorb for photosynthesis?', 'opts' => ['A) Oxygen', 'B) CO2', 'C) Nitrogen', 'D) Hydrogen'], 'correct' => 'B', 'diff' => 'Easy'],
        ['q' => 'Most abundant element in universe?', 'opts' => ['A) Helium', 'B) Oxygen', 'C) Hydrogen', 'D) Carbon'], 'correct' => 'C', 'diff' => 'Easy'],
        ['q' => 'Force keeping planets in orbit?', 'opts' => ['A) EM Force', 'B) Gravity', 'C) Friction', 'D) Nuclear'], 'correct' => 'B', 'diff' => 'Easy'],
        ['q' => 'Primary energy source for Earth\'s climate?', 'opts' => ['A) Geothermal', 'B) Sun', 'C) Wind', 'D) Tides'], 'correct' => 'B', 'diff' => 'Easy'],
        ['q' => 'Chemical symbol for Gold?', 'opts' => ['A) Au', 'B) Ag', 'C) Fe', 'D) Pb'], 'correct' => 'A', 'diff' => 'Medium'],
        ['q' => 'Speed of light in vacuum?', 'opts' => ['A) 3x10^8 m/s', 'B) 3x10^6 m/s', 'C) 3x10^10 m/s', 'D) Infinite'], 'correct' => 'A', 'diff' => 'Medium'],
        ['q' => 'DNA bases: Adenine pairs with?', 'opts' => ['A) Thymine', 'B) Cytosine', 'C) Guanine', 'D) Uracil'], 'correct' => 'A', 'diff' => 'Medium'],
        ['q' => 'pH of pure water?', 'opts' => ['A) 0', 'B) 7', 'C) 14', 'D) 1'], 'correct' => 'B', 'diff' => 'Medium'],
        ['q' => 'Newton\'s first law?', 'opts' => ['A) F=ma', 'B) Inertia', 'C) Action-Reaction', 'D) Gravity'], 'correct' => 'B', 'diff' => 'Medium'],
        ['q' => 'Human cells have how many chromosomes?', 'opts' => ['A) 23', 'B) 46', 'C) 64', 'D) 22'], 'correct' => 'B', 'diff' => 'Hard'],
        ['q' => 'Quantum theory founder?', 'opts' => ['A) Einstein', 'B) Planck', 'C) Bohr', 'D) Heisenberg'], 'correct' => 'B', 'diff' => 'Hard'],
        ['q' => 'Enzyme function?', 'opts' => ['A) Speed reactions', 'B) Store energy', 'C) Transport O2', 'D) Replicate DNA'], 'correct' => 'A', 'diff' => 'Hard'],
        ['q' => 'Avogadro\'s number approx?', 'opts' => ['A) 6.02x10^23', 'B) 6.02x10^22', 'C) 6.02x10^24', 'D) 6.02x10^21'], 'correct' => 'A', 'diff' => 'Hard'],
        ['q' => 'Big Bang theory age of universe?', 'opts' => ['A) 13.8B years', 'B) 4.5B years', 'C) 100B years', 'D) 1B years'], 'correct' => 'A', 'diff' => 'Hard']
    ],
    'History' => [
        ['q' => 'Year of American Independence?', 'opts' => ['A) 1776', 'B) 1492', 'C) 1812', 'D) 1945'], 'correct' => 'A', 'diff' => 'Easy'],
        ['q' => 'Who painted Mona Lisa?', 'opts' => ['A) Van Gogh', 'B) Da Vinci', 'C) Picasso', 'D) Michelangelo'], 'correct' => 'B', 'diff' => 'Easy'],
        ['q' => 'Ancient wonder: Great Pyramid location?', 'opts' => ['A) Rome', 'B) Egypt', 'C) Greece', 'D) Babylon'], 'correct' => 'B', 'diff' => 'Easy'],
        ['q' => 'World War II end year?', 'opts' => ['A) 1918', 'B) 1939', 'C) 1945', 'D) 1941'], 'correct' => 'C', 'diff' => 'Easy'],
        ['q' => 'First man on moon?', 'opts' => ['A) Gagarin', 'B) Armstrong', 'C) Aldrin', 'D) Glenn'], 'correct' => 'B', 'diff' => 'Easy'],
        ['q' => 'French Revolution start?', 'opts' => ['A) 1789', 'B) 1815', 'C) 1848', 'D) 1917'], 'correct' => 'A', 'diff' => 'Medium'],
        ['q' => 'Inventor of telephone?', 'opts' => ['A) Edison', 'B) Bell', 'C) Tesla', 'D) Marconi'], 'correct' => 'B', 'diff' => 'Medium'],
        ['q' => 'Roman Empire fall year?', 'opts' => ['A) 476 AD', 'B) 1453 AD', 'C) 330 AD', 'D) 27 BC'], 'correct' => 'A', 'diff' => 'Medium'],
        ['q' => 'Magna Carta signed?', 'opts' => ['A) 1215', 'B) 1066', 'C) 1688', 'D) 1776'], 'correct' => 'A', 'diff' => 'Medium'],
        ['q' => 'Cold War major powers?', 'opts' => ['A) US-Soviet', 'B) Britain-France', 'C) Germany-Japan', 'D) China-India'], 'correct' => 'A', 'diff' => 'Medium'],
        ['q' => 'Renaissance birthplace?', 'opts' => ['A) Florence', 'B) Paris', 'C) London', 'D) Vienna'], 'correct' => 'A', 'diff' => 'Hard'],
        ['q' => 'Treaty of Versailles after?', 'opts' => ['A) WWI', 'B) WWII', 'C) Napoleonic', 'D) Hundred Years'], 'correct' => 'A', 'diff' => 'Hard'],
        ['q' => 'First Emperor of Rome?', 'opts' => ['A) Julius Caesar', 'B) Augustus', 'C) Nero', 'D) Constantine'], 'correct' => 'B', 'diff' => 'Hard'],
        ['q' => 'Black Death killed what % Europe?', 'opts' => ['A) 30-60%', 'B) 10%', 'C) 80%', 'D) 5%'], 'correct' => 'A', 'diff' => 'Hard'],
        ['q' => 'UN founded year?', 'opts' => ['A) 1919', 'B) 1945', 'C) 1950', 'D) 1991'], 'correct' => 'B', 'diff' => 'Hard']
    ],
    'Mathematics' => [
        ['q' => '2 + 2 = ?', 'opts' => ['A) 3', 'B) 4', 'C) 5', 'D) 6'], 'correct' => 'B', 'diff' => 'Easy'],
        ['q' => 'Area of square side 4?', 'opts' => ['A) 8', 'B) 12', 'C) 16', 'D) 20'], 'correct' => 'C', 'diff' => 'Easy'],
        ['q' => 'Pi approx?', 'opts' => ['A) 2.14', 'B) 3.14', 'C) 4.14', 'D) 1.14'], 'correct' => 'B', 'diff' => 'Easy'],
        ['q' => 'Triangle angles sum?', 'opts' => ['A) 90°', 'B) 180°', 'C) 360°', 'D) 270°'], 'correct' => 'B', 'diff' => 'Easy'],
        ['q' => 'Prime number: 7?', 'opts' => ['A) Yes', 'B) No', 'C) Even', 'D) Square'], 'correct' => 'A', 'diff' => 'Easy'],
        ['q' => 'Solve: 2x=10, x=?', 'opts' => ['A) 2', 'B) 5', 'C) 20', 'D) 12'], 'correct' => 'B', 'diff' => 'Medium'],
        ['q' => 'Pythagoras: 3-4-?', 'opts' => ['A) 5', 'B) 6', 'C) 7', 'D) 8'], 'correct' => 'A', 'diff' => 'Medium'],
        ['q' => 'Log10(100)=?', 'opts' => ['A) 1', 'B) 2', 'C) 10', 'D) 0'], 'correct' => 'B', 'diff' => 'Medium'],
        ['q' => 'Fibonacci: 1,1,2,3,?', 'opts' => ['A) 4', 'B) 5', 'C) 6', 'D) 8'], 'correct' => 'B', 'diff' => 'Medium'],
        ['q' => 'Sin(90°)=?', 'opts' => ['A) 0', 'B) 1', 'C) 0.5', 'D) Undefined'], 'correct' => 'B', 'diff' => 'Medium'],
        ['q' => 'Derivative of x^2?', 'opts' => ['A) 2x', 'B) x', 'C) x^3/3', 'D) 2'], 'correct' => 'A', 'diff' => 'Hard'],
        ['q' => 'Integral of 2x dx?', 'opts' => ['A) x^2', 'B) 2x^2', 'C) x^2 + C', 'D) x'], 'correct' => 'C', 'diff' => 'Hard'],
        ['q' => 'Matrix 2x2 det formula?', 'opts' => ['A) ad-bc', 'B) a+d', 'C) ab-cd', 'D) a-b+c-d'], 'correct' => 'A', 'diff' => 'Hard'],
        ['q' => 'e^0 =?', 'opts' => ['A) 1', 'B) 0', 'C) e', 'D) Infinite'], 'correct' => 'A', 'diff' => 'Hard'],
        ['q' => 'Bayes\' theorem use?', 'opts' => ['A) Probability', 'B) Geometry', 'C) Algebra', 'D) Calc'], 'correct' => 'A', 'diff' => 'Hard']
    ],
    'Geography' => [
        ['q' => 'Largest ocean?', 'opts' => ['A) Atlantic', 'B) Pacific', 'C) Indian', 'D) Arctic'], 'correct' => 'B', 'diff' => 'Easy'],
        ['q' => 'Capital of France?', 'opts' => ['A) London', 'B) Paris', 'C) Berlin', 'D) Madrid'], 'correct' => 'B', 'diff' => 'Easy'],
        ['q' => 'Equator passes through?', 'opts' => ['A) Asia', 'B) Africa', 'C) Europe', 'D) All'], 'correct' => 'B', 'diff' => 'Easy'],
        ['q' => 'Highest mountain?', 'opts' => ['A) K2', 'B) Everest', 'C) Kilimanjaro', 'D) Denali'], 'correct' => 'B', 'diff' => 'Easy'],
        ['q' => 'Amazon River in?', 'opts' => ['A) Africa', 'B) South America', 'C) Asia', 'D) Australia'], 'correct' => 'B', 'diff' => 'Easy'],
        ['q' => 'Sahara Desert location?', 'opts' => ['A) Asia', 'B) Africa', 'C) Australia', 'D) Antarctica'], 'correct' => 'B', 'diff' => 'Medium'],
        ['q' => 'Longest river?', 'opts' => ['A) Amazon', 'B) Nile', 'C) Yangtze', 'D) Mississippi'], 'correct' => 'B', 'diff' => 'Medium'],
        ['q' => 'Continents number?', 'opts' => ['A) 5', 'B) 6', 'C) 7', 'D) 8'], 'correct' => 'C', 'diff' => 'Medium'],
        ['q' => 'Dead Sea between?', 'opts' => ['A) Israel-Jordan', 'B) Egypt-Syria', 'C) Iraq-Iran', 'D) Turkey-Greece'], 'correct' => 'A', 'diff' => 'Medium'],
        ['q' => 'Tropic of Cancer through?', 'opts' => ['A) Mexico', 'B) Australia', 'C) Chile', 'D) Norway'], 'correct' => 'A', 'diff' => 'Medium'],
        ['q' => 'Ring of Fire location?', 'opts' => ['A) Atlantic', 'B) Pacific', 'C) Indian', 'D) Arctic'], 'correct' => 'B', 'diff' => 'Hard'],
        ['q' => 'Smallest country?', 'opts' => ['A) Monaco', 'B) Vatican', 'C) San Marino', 'D) Liechtenstein'], 'correct' => 'B', 'diff' => 'Hard'],
        ['q' => 'Great Barrier Reef?', 'opts' => ['A) Pacific', 'B) Australia', 'C) Caribbean', 'D) Mediterranean'], 'correct' => 'B', 'diff' => 'Hard'],
        ['q' => 'Volcano: Mount Fuji in?', 'opts' => ['A) China', 'B) Japan', 'C) Korea', 'D) India'], 'correct' => 'B', 'diff' => 'Hard'],
        ['q' => 'Congo Basin rainforest?', 'opts' => ['A) Asia', 'B) Africa', 'C) South America', 'D) Oceania'], 'correct' => 'B', 'diff' => 'Hard']
    ],
    'General Knowledge' => [
        ['q' => 'Currency of Japan?', 'opts' => ['A) Yuan', 'B) Yen', 'C) Won', 'D) Ringgit'], 'correct' => 'B', 'diff' => 'Easy'],
        ['q' => 'Inventor of bulb?', 'opts' => ['A) Tesla', 'B) Edison', 'C) Bell', 'D) Wright'], 'correct' => 'B', 'diff' => 'Easy'],
        ['q' => 'Olympic rings number?', 'opts' => ['A) 3', 'B) 4', 'C) 5', 'D) 6'], 'correct' => 'C', 'diff' => 'Easy'],
        ['q' => 'Shakespeare\'s play: Romeo?', 'opts' => ['A) Hamlet', 'B) Macbeth', 'C) Juliet', 'D) Othello'], 'correct' => 'C', 'diff' => 'Easy'],
        ['q' => 'Largest mammal?', 'opts' => ['A) Elephant', 'B) Blue Whale', 'C) Giraffe', 'D) Shark'], 'correct' => 'B', 'diff' => 'Easy'],
        ['q' => 'UN HQ location?', 'opts' => ['A) London', 'B) Geneva', 'C) New York', 'D) Paris'], 'correct' => 'C', 'diff' => 'Medium'],
        ['q' => 'Nobel Prize categories except?', 'opts' => ['A) Peace', 'B) Literature', 'C) Math', 'D) Physics'], 'correct' => 'C', 'diff' => 'Medium'],
        ['q' => 'Internet domain: .uk?', 'opts' => ['A) USA', 'B) UK', 'C) Ukraine', 'D) Uruguay'], 'correct' => 'B', 'diff' => 'Medium'],
        ['q' => 'Author of Harry Potter?', 'opts' => ['A) Tolkien', 'B) Rowling', 'C) Lewis', 'D) Martin'], 'correct' => 'B', 'diff' => 'Medium'],
        ['q' => 'Human heart chambers?', 'opts' => ['A) 2', 'B) 3', 'C) 4', 'D) 5'], 'correct' => 'C', 'diff' => 'Medium'],
        ['q' => 'Euro currency countries except?', 'opts' => ['A) Germany', 'B) Sweden', 'C) France', 'D) Italy'], 'correct' => 'B', 'diff' => 'Hard'],
        ['q' => 'Oldest university?', 'opts' => ['A) Harvard', 'B) Oxford', 'C) Bologna', 'D) Cambridge'], 'correct' => 'C', 'diff' => 'Hard'],
        ['q' => 'Element symbol Hg?', 'opts' => ['A) Hydrogen', 'B) Helium', 'C) Mercury', 'D) Holmium'], 'correct' => 'C', 'diff' => 'Hard'],
        ['q' => 'First email inventor?', 'opts' => ['A) Gates', 'B) Tomlinson', 'C) Berners-Lee', 'D) Jobs'], 'correct' => 'B', 'diff' => 'Hard'],
        ['q' => 'Longest novel by word count?', 'opts' => ['A) War Peace', 'B) Les Mis', 'C) Art of War', 'D) Don Quixote'], 'correct' => 'A', 'diff' => 'Hard']
    ]
];
$allQuestions = [];
foreach ($questions as $catQs) $allQuestions = array_merge($allQuestions, $catQs);
if ($_POST) {
    $selectedCategory = $_POST['category'] ?? 'All';
    $selectedDifficulty = $_POST['difficulty'] ?? 'All';
    $action = $_POST['action'] ?? '';
    if ($action === 'start') {
        $quizData = ($selectedCategory === 'All') ? $allQuestions : $questions[$selectedCategory];
        if ($selectedDifficulty !== 'All') {
            $quizData = array_filter($quizData, fn($q) => $q['diff'] === $selectedDifficulty);
        }
        $quizData = array_slice(array_values($quizData), 0, 15); // Limit to 15, randomize
        shuffle($quizData);
        $_SESSION['quizData'] = $quizData;
        $_SESSION['score'] = 0;
        $_SESSION['currentQuestion'] = 0;
        $_SESSION['answers'] = array_fill(0, 15, null);
        $_SESSION['times'] = array_fill(0, 15, 0); // For analysis: time per question
        $_SESSION['selectedCategory'] = $selectedCategory;
        $_SESSION['selectedDifficulty'] = $selectedDifficulty;
        header('Location: index.php?mode=quiz');
        exit;
    } elseif ($action === 'next' && isset($_SESSION['quizData']) && $_SESSION['currentQuestion'] < 14) {
        $quizData = $_SESSION['quizData'];
        $current = $_SESSION['currentQuestion'];
        $answer = $_POST['answer'] ?? null;
        if ($answer) {
            $_SESSION['answers'][$current] = $answer;
            if ($answer === $quizData[$current]['correct']) $_SESSION['score']++;
        }
        $_SESSION['times'][$current] = isset($_POST['timeSpent']) ? (int)$_POST['timeSpent'] : 30; // Default to 30s if not set
        $_SESSION['currentQuestion']++;
        header('Location: index.php?mode=quiz');
        exit;
    } elseif ($action === 'prev' && isset($_SESSION['quizData']) && $_SESSION['currentQuestion'] > 0) {
        $_SESSION['currentQuestion']--;
        header('Location: index.php?mode=quiz');
        exit;
    } elseif ($action === 'submit' || $action === 'timeout') {
        if (isset($_SESSION['quizData'])) {
            $quizData = $_SESSION['quizData'];
            $current = $_SESSION['currentQuestion'];
            $answer = $_POST['answer'] ?? null;
            if ($answer) {
                $_SESSION['answers'][$current] = $answer;
                if ($answer === $quizData[$current]['correct']) $_SESSION['score']++;
            }
            $_SESSION['times'][$current] = isset($_POST['timeSpent']) ? (int)$_POST['timeSpent'] : 30;
            if ($current == 14) {
                header('Location: index.php?mode=results');
                exit;
            } else {
                $_SESSION['currentQuestion']++;
                header('Location: index.php?mode=quiz');
                exit;
            }
        }
    }
    header('Location: index.php');
    exit;
}
$mode = $_GET['mode'] ?? 'start';
$quizData = $_SESSION['quizData'] ?? [];
$currentQuestion = $_SESSION['currentQuestion'] ?? 0;
$question = $quizData[$currentQuestion] ?? null;
$isComplete = ($mode === 'results');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Master Challenge - Test Your Knowledge</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; margin: 0; padding: 20px; color: #333; }
        .header { text-align: center; color: white; margin-bottom: 40px; }
        .title { font-size: 2.5em; background: linear-gradient(45deg, #ff6b6b, #4ecdc4); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin: 0; }
        .subtitle { font-size: 1.1em; opacity: 0.9; margin: 10px 0 0; }
        .background-img { position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; opacity: 0.1; background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="%23fff"/><circle cx="80" cy="40" r="1" fill="%23fff"/><path d="M0 50 Q50 0 100 50" stroke="%23fff" fill="none"/></svg>'); }
        .config-card { background: rgba(255,255,255,0.95); border-radius: 20px; padding: 30px; max-width: 500px; margin: 0 auto; box-shadow: 0 10px 30px rgba(0,0,0,0.2); backdrop-filter: blur(10px); }
        .config-title { display: flex; align-items: center; justify-content: center; gap: 10px; font-size: 1.5em; color: #764ba2; margin-bottom: 20px; }
        .dropdowns { display: flex; gap: 20px; margin-bottom: 30px; }
        select { flex: 1; padding: 12px; border: 2px solid #e0e0e0; border-radius: 10px; font-size: 1em; background: white; }
        .details { background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); border-radius: 15px; padding: 20px; margin-bottom: 30px; }
        .detail-item { display: flex; align-items: center; gap: 10px; margin: 10px 0; font-size: 1em; }
        .start-btn { width: 100%; padding: 15px; background: linear-gradient(45deg, #667eea, #764ba2); color: white; border: none; border-radius: 50px; font-size: 1.2em; cursor: pointer; transition: transform 0.2s; }
        .start-btn:hover { transform: scale(1.05); }
        /* Quiz Styles */
        .quiz-container { background: rgba(255,255,255,0.95); border-radius: 20px; padding: 30px; max-width: 600px; margin: 0 auto; box-shadow: 0 10px 30px rgba(0,0,0,0.2); }
        .progress, .timer { text-align: center; margin: 10px 0; font-weight: bold; }
        .timer { color: #e74c3c; }
        .question { font-size: 1.5em; margin: 20px 0; }
        .options { list-style: none; padding: 0; }
        .options li { margin: 15px 0; }
        .options label { display: block; padding: 10px; background: #f8f9fa; border-radius: 10px; cursor: pointer; }
        .nav-buttons { display: flex; justify-content: space-between; margin-top: 20px; }
        button { padding: 10px 20px; background: #667eea; color: white; border: none; border-radius: 10px; cursor: pointer; }
        button:disabled { background: #ccc; }
        /* Results & Analysis */
        .results { text-align: center; }
        .analysis { margin-top: 20px; text-align: left; background: #f8f9fa; padding: 15px; border-radius: 10px; }
        .analysis h3 { color: #764ba2; }
        .back-btn { background: #4ecdc4; margin-top: 20px; }
        /* Chart Styles */
        .chart-container { width: 100%; margin: 20px auto; max-width: 400px; }
        .visual-icon { text-align: center; margin: 20px 0; }
        .visual-icon img { width: 150px; height: auto; }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="background-img"></div>
    <?php if ($mode === 'start'): ?>
        <div class="header">
            <h1 class="title">Quiz Master Challenge 🧠</h1>
            <p class="subtitle">Test your knowledge across multiple categories and difficulty levels. Track your time, complete for high scores!</p>
        </div>
        <div class="config-card">
            <div class="config-title">🏆 Configure Your Quiz</div>
            <form method="POST">
                <div class="dropdowns">
                    <select name="category">
                        <?php foreach ($categories as $cat): ?>
                            <option value="<?php echo $cat; ?>" <?php echo ($cat === 'All' ? 'selected' : ''); ?>><?php echo $cat; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <select name="difficulty">
                        <option value="All" selected>All</option>
                        <option value="Easy">Easy</option>
                        <option value="Medium">Medium</option>
                        <option value="Hard">Hard</option>
                    </select>
                </div>
                <div class="details">
                    <div class="detail-item">📝 <strong>15 Questions</strong></div>
                    <div class="detail-item">⏱️ <strong>Timed Challenge</strong></div>
                    <div class="detail-item">📊 <strong>Instant Results</strong></div>
                </div>
                <button type="submit" name="action" value="start" class="start-btn">🚀 Start Quiz (15 Questions)</button>
            </form>
        </div>
    <?php elseif ($mode === 'quiz' && $question): ?>
        <div class="quiz-container">
            <div class="progress">Question <?php echo $currentQuestion + 1; ?> of 15</div>
            <div class="timer" id="timer">Time left: 30s</div>
            <div class="question"><?php echo htmlspecialchars($question['q']); ?></div>
            <form method="POST" id="quizForm">
                <ul class="options">
                    <?php foreach ($question['opts'] as $opt): ?>
                        <li>
                            <label>
                                <input type="radio" name="answer" value="<?php echo htmlspecialchars($opt[0]); ?>" <?php echo (($_SESSION['answers'][$currentQuestion] ?? '') === $opt[0] ? 'checked' : ''); ?>>
                                <?php echo htmlspecialchars($opt); ?>
                            </label>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="nav-buttons">
                    <button type="button" onclick="prevQuestion()" <?php echo ($currentQuestion == 0 ? 'disabled' : ''); ?>>Previous</button>
                    <button type="button" onclick="nextQuestion()" id="nextBtn"><?php echo ($currentQuestion == 14 ? 'Submit' : 'Next'); ?></button>
                </div>
                <input type="hidden" name="action" id="actionInput" value="">
                <input type="hidden" name="timeSpent" id="timeSpent" value="0">
            </form>
        </div>
        <script>
            let timeLeft = 30, startTime = Date.now(), timerInterval = null;
            const timerDisplay = document.getElementById('timer'), form = document.getElementById('quizForm'), actionInput = document.getElementById('actionInput'), timeSpent = document.getElementById('timeSpent');
            const currentQ = <?php echo $currentQuestion; ?>, totalQ = 15;
            function startTimer() {
                clearInterval(timerInterval); timeLeft = 30; updateTimerDisplay();
                startTime = Date.now();
                timerInterval = setInterval(() => {
                    timeLeft--; updateTimerDisplay();
                    timeSpent.value = Math.max(0, 30 - timeLeft); // Update time spent
                    if (timeLeft <= 0) {
                        clearInterval(timerInterval);
                        logSelenium(`timer expired q${currentQ + 1}`, 'form#quizForm');
                        actionInput.value = (currentQ === totalQ - 1 ? 'submit' : 'next'); form.submit();
                    }
                }, 1000);
                logSelenium(`start timer q${currentQ + 1}`, 'div#timer');
            }
            function updateTimerDisplay() { timerDisplay.textContent = `Time left: ${timeLeft}s`; if (timeLeft <= 10) timerDisplay.style.color = '#e74c3c'; }
            function logSelenium(action, element) {
                console.log(`[Selenium Log] Action: ${action}`); console.log(`[Selenium Log] Element: ${element}`); console.log(`[Selenium Log] Timestamp: ${new Date().toISOString()}`);
            }
            function nextQuestion() {
                clearInterval(timerInterval); const spent = Math.max(0, 30 - timeLeft); timeSpent.value = spent;
                logSelenium('click next', 'button#nextBtn'); actionInput.value = (currentQ === totalQ - 1 ? 'submit' : 'next'); form.submit();
            }
            function prevQuestion() { clearInterval(timerInterval); logSelenium('click prev', 'button:first-child'); actionInput.value = 'prev'; form.submit(); }
            document.addEventListener('DOMContentLoaded', () => {
                startTimer();
                document.querySelectorAll('input[type="radio"]').forEach(r => r.addEventListener('change', () => logSelenium(`select ${r.value} q${currentQ + 1}`, `input[value="${r.value}"]`)));
            });
        </script>
    <?php elseif ($isComplete): ?>
        <?php
        $score = $_SESSION['score'] ?? 0; $total = 15; $pct = round(($score / $total) * 100, 1);
        $cat = $_SESSION['selectedCategory'] ?? 'All'; $diff = $_SESSION['selectedDifficulty'] ?? 'All';
        $quizData = $_SESSION['quizData'] ?? []; $answers = $_SESSION['answers'] ?? [];
        $times = $_SESSION['times'] ?? array_fill(0, 15, 0);
        $correctCount = $score; $incorrectCount = $total - $score;
        $visualImage = ($pct >= 80) ? 'trophy.png' : (($pct >= 50) ? 'https://example.com/silver-medal.png' : 'https://example.com/bronze-badge.png');
        ?>
        <div class="quiz-container">
            <div class="results">
                <h2>Quiz Complete! 🏆</h2>
                <p style="font-size: 2em; color: #4ecdc4;">Score: <?php echo $score; ?>/<?php echo $total; ?> (<?php echo $pct; ?>%)</p>
                <p>Category: <?php echo $cat; ?> | Difficulty: <?php echo $diff; ?></p>
                <p>Correct: <?php echo $correctCount; ?> | Incorrect: <?php echo $incorrectCount; ?></p>
                <div class="visual-icon">
                    <img src="<?php echo $visualImage; ?>" alt="Achievement Icon">
                </div>
                <div class="chart-container">
                    <canvas id="pieChart"></canvas>
                </div>
                <div class="chart-container">
                    <canvas id="barChart"></canvas>
                </div>
                <button class="back-btn" onclick="location.href='index.php'">New Quiz</button>
            </div>
            <div class="analysis">
                <h3>📊 Analysis:</h3>
                <ul>
                    <?php for ($i = 0; $i < $total; $i++):
                        $correct = isset($answers[$i]) && $answers[$i] === $quizData[$i]['correct'];
                        $status = $correct ? '✅ Correct' : '❌ Incorrect (Ans: ' . $quizData[$i]['correct'] . ')';
                        $timeTaken = $times[$i] ?: 30; 
                    ?>
                        <li>Q<?php echo $i+1; ?>: <?php echo htmlspecialchars($quizData[$i]['q']); ?> - <?php echo $status; ?> (Time: <?php echo $timeTaken; ?>s)</li>
                    <?php endfor; ?>
                </ul>
                <p><strong>Suggestions:</strong> <?php echo ($pct > 70 ? 'Excellent! Try harder difficulty.' : ($pct > 50 ? 'Good job! Review weak areas.' : 'Keep practicing!')); ?></p>
                <p>Avg Time per Q: ~<?php echo round(array_sum($times) / $total, 1); ?>s</p>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const correct = <?php echo $correctCount; ?>;
                const incorrect = <?php echo $incorrectCount; ?>;
                const times = <?php echo json_encode($times); ?>;
                const questionLabels = Array.from({length: 15}, (_, i) => `Q${i+1}`);

                new Chart(document.getElementById('pieChart'), {
                    type: 'pie',
                    data: {
                        labels: ['Correct', 'Incorrect'],
                        datasets: [{
                            data: [correct, incorrect],
                            backgroundColor: ['#4ecdc4', '#e74c3c'],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: { position: 'top' },
                            title: { display: true, text: 'Correct vs Incorrect Answers' }
                        }
                    }
                });

                new Chart(document.getElementById('barChart'), {
                    type: 'bar',
                    data: {
                        labels: questionLabels,
                        datasets: [{
                            label: 'Time Spent (s)',
                            data: times,
                            backgroundColor: '#667eea',
                            borderColor: '#764ba2',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: { beginAtZero: true, title: { display: true, text: 'Seconds' } }
                        },
                        plugins: {
                            legend: { display: false },
                            title: { display: true, text: 'Time Spent per Question' }
                        }
                    }
                });
            });
        </script>
    <?php endif; ?>
</body>
</html>