module.exports = {
  content: ["./resources/views/**/*.blade.php" , "./resources/**/*.js"],
  theme: {
    extend: {
        backgroundImage: {
            "admin-avatar" : "url('/storage/tarek.jpg')",
            "logo" : "url('/storage/logo.png')"
        }
    },
  },
  plugins: [],
}
