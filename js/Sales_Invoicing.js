import javax.swing.*;
import java.awt.*;

public class SalesInvoicingFrame extends JInternalFrame {

    public SalesInvoicingFrame() {
        setTitle("Sales and Invoicing");
        setSize(600, 400);
        setDefaultCloseOperation(JInternalFrame.DISPOSE_ON_CLOSE);
        setLayout(new BorderLayout());

        JPanel searchPanel = new JPanel(new FlowLayout(FlowLayout.LEFT));
        searchPanel.add(new JLabel("Search Invoice Record:"));
        searchPanel.add(new JTextField(20));
        searchPanel.add(new JButton("Search"));
        add(searchPanel, BorderLayout.NORTH);

        String[] columns = {"Date", "Client", "Amount"};
        Object[][] data = {
                {"2024-06-28", "Client A", "$200.00"},
                {"2024-06-29", "Client B", "$350.00"}
        };
        JTable table = new JTable(data, columns);
        JScrollPane scrollPane = new JScrollPane(table);
        add(scrollPane, BorderLayout.CENTER);

        JPanel totalPanel = new JPanel(new FlowLayout(FlowLayout.RIGHT));
        totalPanel.add(new JLabel("Total: $550.00"));
        add(totalPanel, BorderLayout.SOUTH);

        setVisible(true);
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(() -> {
            JFrame frame = new JFrame("Application");
            frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
            frame.setSize(800, 600);
            JDesktopPane desktopPane = new JDesktopPane();
            frame.add(desktopPane);

            SalesInvoicingFrame invoicingFrame = new SalesInvoicingFrame();
            desktopPane.add(invoicingFrame);

            frame.setVisible(true);
        });
    }
}
