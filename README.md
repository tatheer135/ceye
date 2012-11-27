# CEye - Visual Verification Automation
CEye is a tool to help with visual verification of web applications. You do a commit, and with the help of some magic, you get one or more screenshots of your application delivered on a silver plate. With one click, you can confirm your commit and trigger other processes.

CEye hooks into GitHub and uses TravisCI to create a production-like environment to create your screenshots in. Once the screenshots are made, you recieve an email and can look onto your CEye web interface to see the current status, and confirm your commit.

Well, at least that's the plan.

## Progress
1. <del>Testing screenshot generation with TravisCI</del> Done, works!
2. Develop a PHP application, which takes the screenshots, presents them, and offers possibilities for further processing steps.
3. Write simple and easy to understand example configurations for TravisCI.
4. ???
5. Profit!