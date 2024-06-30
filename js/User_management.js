import javax.swing.*;
import java.awt.*;

public class UserManagementFrame extends JInternalFrame {

    public UserManagementFrame() {
        setTitle("User Management");
        setSize(400, 400);
        setDefaultCloseOperation(JInternalFrame.DISPOSE_ON_CLOSE);
        setLayout(new GridLayout(9, 2, 5, 5));

        add(new JLabel("User ID:"));
        add(new JTextField());

        add(new JLabel("User Name:"));
        add(new JTextField());

        add(new JLabel("First Name:"));
        add(new JTextField());

        add(new JLabel("Last Name:"));
        add(new JTextField());

        add(new JLabel("Group:"));
        JComboBox<String> groupComboBox = new JComboBox<>(new String[]{"User", "Admin"});
        add(groupComboBox);

        add(new JLabel("Status:"));
        JComboBox<String> statusComboBox = new JComboBox<>(new String[]{"Enabled", "Disabled"});
        add(statusComboBox);

        JButton saveButton = new JButton("Save");
        JButton findButton = new JButton("Find");
        JButton closeButton = new JButton("Close");

        add(saveButton);
        add(findButton);
        add(closeButton);

        setVisible(true);
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(() -> {
            JFrame frame = new JFrame("Application");
            frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
            frame.setSize(600, 600);
            JDesktopPane desktopPane = new JDesktopPane();
            frame.add(desktopPane);

            UserManagementFrame userFrame = new UserManagementFrame();
            desktopPane.add(userFrame);

            frame.setVisible(true);
        });
    }
}
