<div align="center">

<h1>🌐 Arturo Website</h1>

Official website for the **[Arturo programming language](https://arturo-lang.io)**,<br>built statically with Arturo itself

</div>

--------------

<!--ts-->
   * [Structure](#structure)
     * [Files](#files) 
   * [Contributing](#contributing)
   * [License](#license)
<!--te-->

--------------

## Structure

### Files

Most of the files that you'd probably want to study/edit/change reside in the `src/` folder:

```
src/
├── backend/                    # PHP backend for playground
│   ├── db.php                  # Database configuration
│   ├── example.php             # Example code handler
│   ├── exec.php                # Code execution
│   ├── get.php                 # Retrieve saved snippet
│   ├── getexamples.php         # Fetch available examples
│   ├── run.sh                  # Shell script for code execution
│   ├── save.php                # Save code snippet to database
│   └── visit.php               # Usage tracking
│
├── config/
│   └── nginx.conf              # Server configuration
│
├── data/                       # Auto-generated (DO NOT EDIT)
│
├── pages/                      # Site content
│   ├── documentation/
│   │   ├── library/            # API reference (auto-generated)
│   │   ├── command line.art
│   │   ├── examples.art
│   │   ├── getting started.art
│   │   ├── in a nutshell.art
│   │   └── language.art
│   └── _index.art
│
├── scripts/                    # Installation scripts
│   ├── installer.sh            # Linux/macOS
│   ├── installer.ps1           # Windows/PowerShell
│   └── setup_runner.sh         # Backend runner setup
│
├── theme/                      # Main theme
│   ├── components/             # HTML partials (navbar, footer, etc.)
│   ├── resources/
│   │   ├── scripts/            # JavaScript (ACE editor, playground, search)
│   │   └── styles/             # SCSS (main, playground, search)
│   ├── 404.html
│   ├── docpage.html
│   ├── examplepage.html
│   ├── function.html
│   ├── index.html
│   ├── module_index.html
│   ├── playground.html
│   └── settings.art            # Template routing & postprocessing
│
└── config.art                  # Site generation rules
```

> [!NOTE] 
> You may also notice a `/tools` subfolder, mostly contains helper script and the generator itself; messy as it is - I would strongly advise against touching (for now), for your own sanity! lol

## Contributing

 If you want to fix/change/add anything, feel free to open a PR! 😉   
 Ideas are 100% welcome too! 🚀

> [!WARNING]
> **Never edit auto-generated files:**
> - `src/data/` - regenerated during each build
> - `src/pages/documentation/library/` - extracted from Arturo source code

-----------------------------

License
------------------------------

MIT License

Copyright (c) 2019-2026 Yanis Zafirópulos (aka Dr.Kameleon)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
