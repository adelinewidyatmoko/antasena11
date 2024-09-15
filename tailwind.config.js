/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      margin: {
        '120': '30rem', // Adds a custom class 'mb-120' for 30rem margin (480px)
        '144': '200rem', // Adds 'mb-144' for 36rem margin (576px)
      },
      backgroundImage: {
        'full-screen-gradient': `linear-gradient(135deg, #320641, #822b67, #ff5f2e, #ffdd80)`,
        // Or radial gradient
        // 'full-screen-gradient': `radial-gradient(circle, #320641, #822b67, #ff5f2e, #ffdd80)`,
      },
      keyframes: {
        'fade-in': {
          '0%': { opacity: '0', backgroundColor: 'white' },
          '100%': { opacity: '1', backgroundColor: 'transparent' },
        },
        textChange: {
          '0%, 40%': { content: '"PROFILE"' },  // First half: show "PROFILE"
          '60%, 100%': { content: '"HELLO, I\'M ADEL"' },  // Second half: show "HELLO, I'M ADEL"
        },
        typing: {
          '0%': { width: '0%' },           // Start with no text
          '100%': { width: '100%' },        // End with full text visible
        },
        blink: {
          '50%': { borderColor: 'transparent' },  // Blink effect
          '100%': { borderColor: 'white' },
        },
        backgroundImage: {
          'custom-grid': `linear-gradient(0deg, transparent 24%, rgba(114, 114, 114, 0.3) 25%, rgba(114, 114, 114, 0.3) 26%, transparent 27%, transparent 74%, rgba(114, 114, 114, 0.3) 75%, rgba(114, 114, 114, 0.3) 76%, transparent 77%, transparent),
                          linear-gradient(90deg, transparent 24%, rgba(114, 114, 114, 0.3) 25%, rgba(114, 114, 114, 0.3) 26%, transparent 27%, transparent 74%, rgba(114, 114, 114, 0.3) 75%, rgba(114, 114, 114, 0.3) 76%, transparent 77%, transparent)`
        },
        backgroundSize: {
          'custom-grid': '55px 55px', // Define custom background size
        },
        colors: {
          'dark-gray': '#191a1a', // Define the background color
        },
      },
      animation: {
        'fade-in': 'fade-in 3s ease-in-out forwards',
         'textChange': 'textChange 5s ease-in-out infinite', // Custom animation
         'typing' : 'typing 4s steps(20, end), blink 0.75s step-end infinite',
    
      },
      fontFamily: {
        lobster: ['Lobster', 'sans-serif'], // Add Lobster font
      },
    },
  },
  plugins: [],
}