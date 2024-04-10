package com.example.brisatech.view

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import com.example.brisatech.R

class Home : AppCompatActivity() {

    private lateinit var binding: ActivityMainBinding

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = ActivityMainBinding.inflate(layoutInflater)
        setContentView(binding.root)

        supportActionBar?.hide()

        binding.btLogin.set0nClickistener{
            val Username = binding.editUsername.text.toString()
            val Password = binding.editPassword.text.toString()

        when{
            Username.isEmpty() -> {
                message(it,message:"Put your Username!")
            }Password.isEmpty() -> {
                message(it,message: "Put your Password!")
            }Password.length <=5 -> {
                message(it,message: "The password must be at least 5 characters long")
            }else -> {
                navegarPraHome(Username)
            }
        }
        }
    }
    private fun message(view: View, message: String){
        val snackbar = Snackbar.make(view,message,Snackkbar.LENGTH_SHORT)
        snackbar.setBackgroundTint(Color.parseColor(colorString:"#FF0000"))
        snackbar.setTextColor(Color.parseColor(solorString:"#FFFFFF"))
        snackbar.show()
    }
    private fun navegarPraHome(Username: String){
        val intent = Intent(packageContext:this, Home::class.java)
        intent.putExtra(Username:"Username",Username)
        startActivity(intent)
    }
}