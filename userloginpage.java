public class LoginActivity extends AppCompatActivity{
private EditText usernameInput;
private EditText passwordInput;
private Button loginButton;

@Override
protected void onCreate(Bundle savedInstance) {
    super.onCreate(Bundle savedInstanceState);
    setContentView(R.layout.activity_login);

    usernameInput = findViewById(R.id.username_field);
    passwordInput = findViewById(R.id.password_field);
    loginButton = findViewById(R.id.login_button);

    loginButton.setOnClickListerner(new View.OnClickListener(){
        @Override
        public void onClick(View v) {
            String username = usernameInput.getText().toString();
            String password = passwordInput.getText().toString();


            Toast.makeText(LoginActivity.this, "Login attempt: " + username + ", " + password, Toast.LENGTH_SHORT).show();
        }
    });
}
}