import javax.swing.*;
import java.awt.*;

public class StockManagementFrame extends JInternalFrame {

    public StockManagementFrame() {
        setTitle("Stock Management");
        setSize(400, 400);
        setDefaultCloseOperation(JInternalFrame.DISPOSE_ON_CLOSE);
        setLayout(new GridLayout(8, 2, 5, 5));

        add(new JLabel("Stock ID:"));
        add(new JTextField());

        add(new JLabel("Stock Item Name:"));
        add(new JTextField());

        add(new JLabel("Stock Item Description:"));
        add(new JTextField());

        add(new JLabel("Stock Item On-Hand:"));
        add(new JTextField());

        add(new JLabel("Stock Item Price:"));
        add(new JTextField());

        add(new JLabel("Stock Item Status:"));

        JPanel statusPanel = new JPanel(new FlowLayout(FlowLayout.LEFT));
        JRadioButton enabledButton = new JRadioButton("Enabled");
        JRadioButton disabledButton = new JRadioButton("Disabled");
        ButtonGroup statusGroup = new ButtonGroup();
        statusGroup.add(enabledButton);
        statusGroup.add(disabledButton);
        statusPanel.add(enabledButton);
        statusPanel.add(disabledButton);
        add(statusPanel);

        JButton saveButton = new JButton("Save");
        JButton searchButton = new JButton("Search");
        JButton closeButton = new JButton("Close");

        add(saveButton);
        add(searchButton);
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

            StockManagementFrame stockFrame = new StockManagementFrame();
            desktopPane.add(stockFrame);

            frame.setVisible(true);
        });
    }
}
