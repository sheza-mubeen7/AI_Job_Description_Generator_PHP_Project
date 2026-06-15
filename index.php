<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Description Generator — Premium Studio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    
    <style>
        /* Premium Classy Design Tokens (Deep Emerald & Warm Gold) */
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: radial-gradient(circle at 50% 0%, #06261d 0%, #020f0c 100%);
        }
        
        .serif-heading {
            font-family: 'Playfair Display', serif;
        }

        /* Smooth Micro-interactions */
        .fade-in { animation: fadeIn 0.6s cubic-bezier(0.16, 1, 0.3, 1); }
        @keyframes fadeIn { 
            from { opacity: 0; transform: translateY(16px); filter: blur(4px); } 
            to { opacity: 1; transform: translateY(0); filter: blur(0); } 
        }

        /* Glassmorphism Matte Core Layers with Warm Gold Hint Borders */
        .glass-card {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(24px) saturate(110%);
            -webkit-backdrop-filter: blur(24px) saturate(110%);
            border: 1px solid rgba(212, 175, 55, 0.08);
        }

        /* Custom Input Dynamic States */
        .classy-input {
            background: rgba(2, 15, 12, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.08);
            color: #f5f5f0;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .classy-input:focus {
            border-color: #d4af37; /* Warm Gold Focus Anchor */
            box-shadow: 0 0 16px rgba(212, 175, 55, 0.12);
            outline: none;
        }
        
        /* Custom Scrollbar for the Output Area */
        .custom-scroll::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scroll::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.2);
        }
        .custom-scroll::-webkit-scrollbar-thumb {
            background: rgba(212, 175, 55, 0.2);
            border-radius: 10px;
        }
    </style>
</head>
<body class="text-stone-200 min-h-screen selection:bg-amber-500/20">
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-4xl mx-auto">
            
            <!-- Header Section -->
            <div class="text-center mb-16 fade-in">
                <span class="text-xs font-semibold tracking-[0.3em] text-amber-400/80 uppercase mb-3 block">AI Agentic Recruiter Suite</span>
                <h1 class="serif-heading text-5xl font-medium tracking-tight text-stone-100 mb-4">
                    Job Description <span class="italic text-amber-200/90">Generator</span>
                </h1>
                <p class="text-sm text-stone-400 max-w-md mx-auto font-light leading-relaxed">
                    Deploy high-fidelity architecture variables to orchestrate professional, enterprise-grade organizational role blueprints.
                </p>
            </div>

            <!-- Form Card -->
            <div class="glass-card rounded-2xl shadow-2xl p-8 mb-10 fade-in" style="animation-delay: 0.1s;">
                <form id="jobForm" action="process.php" method="POST" class="space-y-6">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-widest text-amber-400/90 mb-2">Job Title*</label>
                            <input type="text" name="jobTitle" required placeholder="e.g., Lead AI Solutions Architect" 
                                   class="w-full px-4 py-3 rounded-xl classy-input font-medium placeholder-stone-600 text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-widest text-amber-400/90 mb-2">Department*</label>
                            <input type="text" name="department" required placeholder="e.g., Engineering & Autonomous Workflows" 
                                   class="w-full px-4 py-3 rounded-xl classy-input font-medium placeholder-stone-600 text-sm">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-widest text-amber-400/90 mb-2">Experience Required*</label>
                            <select name="experience" required class="w-full px-4 py-3 rounded-xl classy-input font-medium text-sm appearance-none">
                                <option value="" class="bg-[#020f0c] text-stone-500">Select experience level</option>
                                <option class="bg-[#020f0c]">Entry Level (0-2 years)</option>
                                <option class="bg-[#020f0c]">Mid Level (3-5 years)</option>
                                <option class="bg-[#020f0c]">Senior Level (5+ years)</option>
                                <option class="bg-[#020f0c]">Executive</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-widest text-amber-400/90 mb-2">Employment Type*</label>
                            <select name="employmentType" required class="w-full px-4 py-3 rounded-xl classy-input font-medium text-sm appearance-none">
                                <option value="" class="bg-[#020f0c] text-stone-500">Select type</option>
                                <option class="bg-[#020f0c]">Full-time</option>
                                <option class="bg-[#020f0c]">Part-time</option>
                                <option class="bg-[#020f0c]">Contract</option>
                                <option class="bg-[#020f0c]">Temporary</option>
                                <option class="bg-[#020f0c]">Internship</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-widest text-amber-400/90 mb-2">Location*</label>
                        <input type="text" name="location" required placeholder="e.g., Karachi, Pakistan (Hybrid)" 
                               class="w-full px-4 py-3 rounded-xl classy-input font-medium placeholder-stone-600 text-sm">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-widest text-amber-400/90 mb-2">Required Skills*</label>
                        <textarea name="skills" rows="2" required placeholder="e.g., PHP, JavaScript, Project Management" 
                                  class="w-full px-4 py-3 rounded-xl classy-input font-medium placeholder-stone-600 text-sm resize-none"></textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-widest text-stone-400 mb-2">Preferred Qualifications*</label>
                            <textarea name="qualifications" rows="3" placeholder="Describe preferred qualifications..."
                                      class="w-full px-4 py-3 rounded-xl classy-input font-medium placeholder-stone-600 text-sm resize-none"></textarea>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-widest text-stone-400 mb-2">Certifications (optional)</label>
                            <textarea name="certifications" rows="3" placeholder="Describe optional certifications..."
                                      class="w-full px-4 py-3 rounded-xl classy-input font-medium placeholder-stone-600 text-sm resize-none"></textarea>
                        </div>
                    </div>

                    <div class="pt-4">
                        <button type="submit" id="generateBtn" 
                                class="w-full md:w-auto px-8 py-3.5 bg-gradient-to-r from-amber-500 via-yellow-600 to-amber-700 text-stone-950 font-semibold tracking-wide text-sm rounded-xl hover:opacity-95 shadow-xl shadow-amber-950/40 active:scale-[0.99] transition-all flex items-center justify-center">
                            <i data-feather="zap" class="mr-2 w-4 h-4 fill-stone-950"></i> Generate Job Description
                        </button>
                    </div>
                </form>
            </div>

            <!-- Result Box Display Terminal -->
            <div id="resultContainer" class="hidden glass-card rounded-2xl shadow-2xl p-8 border border-amber-500/20 bg-gradient-to-b from-amber-950/5 to-transparent fade-in">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                        <h2 class="serif-heading text-2xl font-medium text-stone-100">Generated Job Description</h2>
                    </div>
                    <span class="text-[10px] uppercase font-mono tracking-widest text-amber-400 bg-amber-500/10 px-2 py-1 rounded">Llama-3.1 Response Stream</span>
                </div>
                
                <textarea id="generatedDescription" rows="12" 
                          class="w-full px-4 py-3 bg-[#010a08]/90 border border-stone-800 rounded-xl font-mono text-xs text-amber-200/90 custom-scroll shadow-inner focus:outline-none focus:border-stone-700 leading-relaxed"></textarea>
                
                <div class="flex space-x-3 mt-6">
                    <button id="copyBtn" class="px-5 py-2.5 bg-white/5 border border-white/10 text-xs font-medium tracking-wide rounded-xl text-stone-300 hover:bg-white/10 hover:text-white transition-all flex items-center">
                        <i data-feather="copy" class="mr-2 w-3.5 h-3.5"></i> Copy
                    </button>
                    <button id="downloadBtn" class="px-5 py-2.5 bg-amber-500/10 border border-amber-500/20 text-xs font-medium tracking-wide rounded-xl text-amber-300 hover:bg-amber-500/20 transition-all flex items-center">
                        <i data-feather="download" class="mr-2 w-3.5 h-3.5"></i> Download
                    </button>
                </div>
            </div>
            
        </div>
    </div>

    <script>
        feather.replace();

        document.getElementById('jobForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            const btn = document.getElementById('generateBtn');

            btn.disabled = true;
            btn.className = "w-full md:w-auto px-8 py-3.5 bg-stone-800 text-stone-500 font-semibold tracking-wide text-sm rounded-xl cursor-not-allowed flex items-center justify-center";
            btn.innerHTML = '<i data-feather="loader" class="mr-2 w-4 h-4 animate-spin"></i> Generating...';
            feather.replace();

            fetch(this.action, { method: 'POST', body: formData })
                .then(res => res.text())
                .then(data => {
                    document.getElementById('generatedDescription').value = data;
                    const resultBox = document.getElementById('resultContainer');
                    resultBox.classList.remove('hidden');
                    
                    resultBox.scrollIntoView({ behavior: 'smooth', block: 'start' });

                    btn.disabled = false;
                    btn.className = "w-full md:w-auto px-8 py-3.5 bg-gradient-to-r from-amber-500 via-yellow-600 to-amber-700 text-stone-950 font-semibold tracking-wide text-sm rounded-xl hover:opacity-95 shadow-xl shadow-amber-950/40 active:scale-[0.99] transition-all flex items-center justify-center";
                    btn.innerHTML = '<i data-feather="zap" class="mr-2 w-4 h-4 fill-stone-950"></i> Generate Job Description';
                    feather.replace();
                })
                .catch(err => {
                    console.error(err);
                    btn.disabled = false;
                    btn.className = "w-full md:w-auto px-8 py-3.5 bg-red-950/20 border border-red-500/30 text-red-300 font-semibold tracking-wide text-sm rounded-xl transition-all flex items-center justify-center";
                    btn.innerHTML = '<i data-feather="alert-octagon" class="mr-2 w-4 h-4"></i> Try Again';
                    feather.replace();
                });
        });

        // Copy Clipboard Action Pipeline
        document.getElementById('copyBtn').addEventListener('click', function() {
            const textarea = document.getElementById('generatedDescription');
            textarea.select();
            document.execCommand('copy');
            
            const origHTML = this.innerHTML;
            this.innerHTML = '<i data-feather="check" class="mr-2 w-3.5 h-3.5 text-amber-400"></i> Copied!';
            this.classList.add('border-amber-500/30', 'text-amber-400');
            feather.replace();
            
            setTimeout(() => {
                this.innerHTML = origHTML;
                this.classList.remove('border-amber-500/30', 'text-amber-400');
                feather.replace();
            }, 2000);
        });

        // Download Action Event Handling Mapping
        document.getElementById('downloadBtn').addEventListener('click', () => {
            const content = document.getElementById('generatedDescription').value;
            const blob = new Blob([content], { type: 'text/plain' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'job_description.txt';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        });
    </script>
</body>
</html>