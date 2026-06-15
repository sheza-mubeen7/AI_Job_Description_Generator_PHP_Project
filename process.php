<?php
// ==========================================
// 1. SECURE ZONE: Load Environment Variables
// ==========================================
if (file_exists(__DIR__ . '/.env')) {
    $lines = file(__DIR__ . '/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue; // Comments ko skip karein
        list($name, $value) = explode('=', $line, 2);
        $_ENV[trim($name)] = trim($value);
    }
}

// Key ko variable me store karein (Yahan variable name $apiKey hi rakkha hai taake niche match ho)
$apiKey = $_ENV['GROQ_API_KEY'] ?? '';

if (empty($apiKey)) {
    die("Error: Groq API Key missing in environment configuration.");
}

// ==========================================
// 2. CORE LOGIC: Handle Form Submission
// ==========================================
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect form data
    $jobTitle        = $_POST['jobTitle'] ?? '';
    $department      = $_POST['department'] ?? '';
    $experience      = $_POST['experience'] ?? '';
    $employmentType  = $_POST['employmentType'] ?? '';
    $location        = $_POST['location'] ?? '';
    $skills          = $_POST['skills'] ?? '';
    $qualifications  = $_POST['qualifications'] ?? '';
    $certifications  = $_POST['certifications'] ?? '';

    // Prepare prompt
    $prompt = "Generate a professional job description with these details:\n";
    $prompt .= "Job Title: $jobTitle\nDepartment: $department\nExperience: $experience\nEmployment Type: $employmentType\nLocation: $location\nSkills: $skills\nQualifications: $qualifications\n";
    if (!empty($certifications)) {
        $prompt .= "Certifications: $certifications\n";
    }
    $prompt .= "Make it structured, clear, and appealing.";

    // Call Groq API
    $url = "https://api.groq.com/openai/v1/chat/completions";

    $data = [
        "model" => "llama-3.1-8b-instant",
        "messages" => [
            ["role" => "system", "content" => "You are a helpful assistant that writes professional job descriptions."],
            ["role" => "user", "content" => $prompt]
        ],
        "temperature" => 0.7
    ];

    $options = [
        "http" => [
            "header"  => "Content-Type: application/json\r\nAuthorization: Bearer $apiKey\r\n",
            "method"  => "POST",
            "content" => json_encode($data),
        ],
    ];

    $context  = stream_context_create($options);
    $result   = file_get_contents($url, false, $context);

    if ($result === FALSE) {
        echo "Error contacting Groq API";
        exit;
    }

    $response = json_decode($result, true);
    echo $response['choices'][0]['message']['content'] ?? "No description generated.";
}
?>