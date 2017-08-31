echo "# webTraining" >> README.md
git init
git add .
git commit -m "first commit"
git remote add origin https://github.com/nagasaimanoj/webTraining.git
git config --global http.proxy 10.100.1.124:3128
git push -u origin master