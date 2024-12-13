<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Alumno</th>
            <th>Libro</th>
            <th>Fecha Préstamo</th>
            <th>Fecha Devolución</th>
        </tr>
    </thead>
    <tbody>
            <?php foreach ($prestamos as $prestamo): ?>
                <tr>
                    <td><?= htmlspecialchars($prestamo['preId']) ?></td>
                    <td><?= htmlspecialchars($prestamo['aluDni']) ?></td>
                    <td><?= htmlspecialchars($prestamo['libId']) ?></td>
                    <td><?= htmlspecialchars($prestamo['preFecha']) ?></td>
                    <td><?= htmlspecialchars($prestamo['preFechaDevolucion']) ?></td>
                </tr>
            <?php endforeach; ?>
            
    </tbody>
</table>
